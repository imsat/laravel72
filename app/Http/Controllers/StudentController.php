<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        retu0rn "Hello World Form Controller";
        $name = "Satyajit Mondal";
        return view('demo', compact('name'));
    }
    public function newOne(){
        return "Hello New One";
//        return view('welcome');
    }
    public function newTwo(){
        return "Hello New Two";
    }
}
