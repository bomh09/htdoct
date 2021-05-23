<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use App\User;
use App\Slide;
class HomeController extends Controller
{
    public function getdashbroad()	
    {
    	$product_count = Product::count();
    	$user_count = User::count();
    	$slide_count = Slide::count();
    	$protype_count = ProductType::count();
    	return view('admin.index',['num_product'=> $product_count,'num_user'=>$user_count,'num_slide'=>$slide_count,'num_protype'=>$protype_count]);
    }
}
