<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Customer;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories=Category::where('status',2)->get();
   	    return view('frontend.home.index',['categories'=>$categories]);
    }

    public function allProductByCat($slug='')
    {
        $cat=Category::where('slug',$slug)->first();
        $products=Product::where('catId',$cat->id)->where('status','>',0)->paginate(3);
        return view('frontend.home.allproductbycat',['cat'=>$cat,'products'=>$products]);
    }

    public function allProductByBrand($slug='')
    {
        $brand=Brand::where('slug',$slug)->first();
        $products=Product::where('brandId',$brand->id)->where('status','>',0)->paginate(3);
        return view('frontend.home.allproductbybrand',['brand'=>$brand,'products'=>$products]);
    }

    
    public function allProductBySearch(Request $request)
    {
        $products=Product::where('productName','like', '%'.$request->key.'%')->get();
        return view('frontend.home.allproductbysearch',['products'=>$products]);
    }

    public function HistoryCart(Request $request)
    {
        foreach($orders as $order)
        {
            $order->customerName=Customer::where('id', $order->customerId)->first()->customerName;
 
        }
        if($keyword=request()->keyword)
        {
            $orders=Order::latest()->where('orderName', 'like', '%'.$keyword.'%')->paginate(5);
        }
        return view('frontend.home.historycart', );
    }

    public function ProductDetail($slug)
    {
        $products=Product::where('slug',$slug)->where('status','>',0)->first();
        return view('frontend.home.productdetail',['products'=>$products]);
    }

}
