<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\File;
use Auth;
use Validator;
use Session;

class ProductController extends Controller
{
    public function getList()
    {
    	$Products = Product::all();
    	return view('admin.product.list',['Products'=>$Products]);
    }
    public function getAdd()
    {
    	$protypes = ProductType::all();
    	
    	return view('admin.product.add',['protypes'=>$protypes]);
    }
    public function postAdd(Request $request)
    {
    	$rules= [
    			'name'=>'required|min:3|max:100',
    			'id_type'=> 'required| integer',
    			'unit_price'=> 'required',
                'promotion_price'=> 'required',
                'unit'=> 'required',
    			];
    	$msg = [
    			'name.required'=>'Không được bỏ trống tên.',
    			'name.unique' => 'Tên này đã bị trùng, vui lòng nhập lại!',
    			'name.min'=>'Tên sản phẩm gồm ít nhất 3 ký tự!',
    			'name.max'=>'Tên sản phẩm gồm tối đa 100 ký tự!',
    			'unit_price.required'=>'Không được bỏ trống giá',
    			'id_type.required'=> 'Không được bỏ trống loại sản phẩm.',
    			'id_type.integer'=> 'Chọn sai loại sản phẩm.',
    			'promotion_price.required' => 'Không được bỏ trống giá khuyến mãi',
                
    			];
		$validator = Validator::make($request->all(), $rules , $msg);

		if ($validator->fails()) {
		    return redirect()->back()
		                ->withErrors($validator)
		                ->withInput();
		} else {
	    	$Product = new Product();
	    	$Product->name = $request->input('name');
	    	$Product->id_type = $request->input('id_type');
	    	$Product->description = $request->input('description');
            $Product->unit_price = $request->input('unit_price');
            $Product->promotion_price = $request->input('promotion_price');
            $Product->unit = $request->input('unit');
	    	$Product->new = $request->input('new');
	    	//Upload Image
	    	if($request->hasFile('img_Product')){
	    		$file = $request->file('img_Product');
	    		$file_extension = $file->getClientOriginalExtension(); // Lấy đuôi của file
	    		if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){
	    			$Product->Product_type = 'text';
	    		} else if($file_extension == 'mp4' || $file_extension == '3gp' || $file_extension == 'avi' || $file_extension == 'flv'){
	    			$Product->Product_type = 'video';
	    		} else return redirect()->back()->with('errfile','Chưa hỗ trợ định dạng file vừa upload.')->withInput();

	    		$file_name = $file->getClientOriginalName();
	    		$random_file_name = str_random(4).'_'.$file_name;
	    		while(file_exists('source/image/product/'.$random_file_name)){
	    			$random_file_name = str_random(4).'_'.$file_name;
	    		}
	    		$file->move('source/image/product',$random_file_name);
	    		// $file_upload = new File();
	    		// $file_upload->name = $random_file_name;
	    		// $file_upload->link = 'source/image/product/'.$random_file_name;
	    		// $file_upload->Product_id = $Product->id;
	    		// $file_upload->save();
	    		$Product->image = 'source/image/product/'.$random_file_name;
	    	} else $Product->image='';
	    	$Product->save();
	    	// Inset to table tag.
    	}
    	Session::flash('flash_success','Thêm sản phẩm thành công.');
    	return redirect()->route('list-product');
    }
    public function getUpdate($id)
    {
    	$Product = Product::find($id);
        if($Product){
            
            $protypes = ProductType::all();
            
            return view('admin.product.edit',['Product'=>$Product]);
        
        }
    	else {
            Session::flash('flash_err','Sai Thông tin sản phẩm.');
            return redirect()->route('list-product');
        }
    	
    }

    public function postUpdate(Request $request,$id)
    {
    	$Product = Product::find($id);
        if( $Product ) {
            $rules= [
                'name'=>'required|min:3|max:100',
    			'id_type'=> 'required| integer',
    			'unit_price'=> 'required',
                'promotion_price'=> 'required',
                'unit'=> 'required',
            ];
            $msg = [
                'name.required'=>'Không được bỏ trống tiêu đề.',
                'name.unique' => 'Tin này đã bị trùng, vui lòng nhập lại!',
                'name.min'=>'Tên tin tức gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên tin tức gồm tối đa 100 ký tự!',
                'description.required'=>'Không được bỏ trống tóm tắt.',
                'unit_price.required'=>'Không được bỏ trống nội dung',
                
            ];
            
            $validator = Validator::make($request->all(), $rules , $msg);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            } else {
                $Product->name = $request->input('name');
                $Product->id_type = $request->input('id_type');
                $Product->description = $request->input('description');
                $Product->unit_price = $request->input('unit_price');
                $Product->promotion_price = $request->input('promotion_price');
                $Product->unit = $request->input('unit');
                $Product->new = $request->input('new');
                
                //Upload Image
                if($request->hasFile('img_Product')){
                    ini_set('memory_limit','256M');
                    $file = $request->file('img_Product');
                    $file_extension = $file->getClientOriginalExtension(); // Lấy đuôi của file
                    if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){
                        $Product->Product_type = 'text';
                    } else if($file_extension == 'mp4' || $file_extension == '3gp' || $file_extension == 'avi' || $file_extension == 'flv'){
                        $Product->Product_type = 'video';
                    } else return redirect()->back()->with('errfile','Chưa hỗ trợ định dạng file vừa upload.')->withInput();

                    $file_name = $file->getClientOriginalName();
                    $random_file_name = str_random(4).'_'.$file_name;
                    while(file_exists('source/image/product/'.$random_file_name)){
                        $random_file_name = str_random(4).'_'.$file_name;
                    }
                    $file->move('source/image/product',$random_file_name);
                    $file_upload = new File();
                    $file_upload->name = $random_file_name;
                    $file_upload->Product_id = $Product->id;
                    $file_upload->save();
                    $Product->image = 'source/image/product/'.$random_file_name;
                }

                $Product->save();

                Session::flash('flash_success','Thay đổi thành công.');
                return redirect()->route('list-product');
            }
        } else {
            Session::flash('flash_err','Sai thông tin bài viết.');
            return redirect()->route('list-product');
        }
    }
    	
    public function getDelete($id)
    {
    	$Product = Product::find($id);
        if( $Product ){
            $Product->delete();
            Session::flash('flash_success','Xóa thành công.');
            return redirect()->route('list-product');
        } else {
            Session::flash('flash_err','Bài viết không tồn tại.');
        }
        return redirect()->route('list-product');
    }
    
}
