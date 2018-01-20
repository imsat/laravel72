<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigStoreController extends Controller
{
    public function index(){
                return view('front-end.home.home');
    }
    public function contactUs(){

        return view('front-end.contact.contact');
    }
    public function hairCare(){

        return view('front-end.care.care');
    }
    public function singleProduct(){

        return view('front-end.single.singleproduct');
    }

}
