<?php

namespace App\View\Components\frontend;


use Illuminate\View\Component;
use App\Models\Link;

class SlideShow extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        $links=Link::where('status',">",0)->where('position',2)->get();
        return view('components.frontend.slide-show',['links'=>$links]);
    }
}
