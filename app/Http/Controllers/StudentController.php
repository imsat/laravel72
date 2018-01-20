<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function index(){
//        return "Hello World Form Controller";
        $name = "Satyajit Mondal";
        $age = 23;
//        return view('demo', compact('name','age'));

//        return view('demo')
//            ->with('n', $name)
//            ->with('a', $age);

        return view('demo',[
            'n' => $name,
            'a' =>$age
        ]);
    }
    public function newOne(){
        return "Hello New One";
//        return view('welcome');
    }
    public function newTwo(){
        return "Hello New Two";
    }
}
