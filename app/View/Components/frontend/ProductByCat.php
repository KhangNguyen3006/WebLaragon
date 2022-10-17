<?php

namespace App\View\Components\frontend;


use Illuminate\View\Component;
use App\Models\Product;

class ProductByCat extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($catId,$catName)
    {
        $this->catName=$catName;
        $this->catId=$catId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $products=Product::where('status','>',0)->wherenotnull('salePrice')->where('catId',$this->catId)->orderby('created_at','desc')->limit(6)->get();
        return view('components.frontend.product-by-cat',['products'=>$products,'catName'=>$this->catName]);
    }
}
