<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;
use App\Models\Category;


class CategoryMenu extends Component
{

    public function __construct()
    {
        
    }

    public function render()
    {
        $categories1=Category::where('status',">",0)->where('parentId',0)->get();
        $categories2=Category::where('status',">",0)->where('parentId',">",0)->get();
        return view('components.frontend.category-menu',[
            'categories1'=>$categories1,
            'categories2'=>$categories2,
        ]);
    }
}
