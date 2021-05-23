<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use Session;
use Auth;
use Validator;

class ProductTypeController extends Controller
{
    public function getList()
    {
    	$protypes = ProductType::all();
    	return view('admin.typeproduct.list',["protypes"=>$protypes]);
    }
    public function getAdd()
    {
    	$protypes = ProductType::all();
    	return view('admin.typeproduct.add',["protypes"=>$protypes]);
    }
    public function postAdd(Request $req)
    {
    	$this->validate($req,
    		[
    			'name'=>'required|unique:type_products,name|min:3|max:70',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên loại sản phẩm!',
                'name.min'=>'Tên loại sản phẩm gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên loại sản phẩm gồm tối đa 50 ký tự!',
    		]);
    	$protypes = new ProductType();
    	$protypes->name = $req->input('name');
    	$protypes->description = $req->input('description');
    	
    	$protypes->save();
    	Session::flash('flash_success','Thêm loại sản phẩm thành công.');
        return redirect('admin/typeproduct/add');
    }
    
	public function getUpdate($id)
    {
    	$protypes = ProductType::find($id);
    	return view('admin.typeproduct.edit', ['protypes'=>$protypes]);
	}
	
    public function postUpdate(Request $request,$id)
    {
    	$protypes = ProductType::find($id);
        if( $protypes ) {
            $rules= [
                'name'=>'required|min:3|max:100',
                'description' =>'required|max:180',
            ];
            $msg = [
                'name.required'=>'Không được bỏ trống tiêu đề.',
                'name.unique' => 'Tin này đã bị trùng, vui lòng nhập lại!',
                'name.min'=>'Tên tin tức gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên tin tức gồm tối đa 100 ký tự!',
                'description.required'=>'Không được bỏ trống tóm tắt.',                
            ];
            
            $validator = Validator::make($request->all(), $rules , $msg);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            } else {
                $protypes->name = $request->input('name');
                $protypes->description = $request->input('description');

                $protypes->save();

                Session::flash('flash_success','Thay đổi thành công.');
                return redirect()->route('list-typeproduct');
            }
        } else {
            Session::flash('flash_err','Sai thông tin bài viết.');
            return redirect()->route('list-typeproduct');
        }
    }

    public function getDelete($id)
    {
    	$protypes = ProductType::find($id);
        if( $protypes ){
            $protypes->delete();
            Session::flash('flash_success','Xóa thành công.');
            // return redirect()->route('list-typeproduct');
        } else {
            Session::flash('flash_err','Bài viết không tồn tại.');
        }
        return redirect()->route('list-typeproduct');
    }
}
