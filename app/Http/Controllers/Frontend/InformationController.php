<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function Infor()
    {
        return view ('frontend.information.infor');
    }
    public function Question()
    {
        return view ('frontend.information.question');
    }

    public function Insurance()
    {
        return view ('frontend.information.insurance');
    }

    public function Security()
    {
        return view ('frontend.information.security');
    }

    public function Pay()
    {
        return view ('frontend.information.pay');
    }

    public function Transport()
    {
        return view ('frontend.information.transport');
    }

    public function Term()
    {
        return view ('frontend.information.term');
    }
}
