<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function moda(){
        return view('frontend.pages.fashion');

    }

    public function elektronik(){
        return view('frontend.pages.electronic');

    }

    public function aksesuar(){
        return view('frontend.pages.accessory');

    }

    public function hesap(){
        return view('frontend.pages.account');

    }

    public function iletisim(){
        return view('frontend.pages.contact');

    }

    public function cart(){
        return view('frontend.pages.cart');

    }

}
