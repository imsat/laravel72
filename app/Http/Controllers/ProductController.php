<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function saveProduct(Request $request){
        $this->validate($request, [
            'category_id' => 'required',
            'brand_id' => 'required',
            'brand_id' => 'required|regex:/^[\pL\s\-]+$/u|min:2|max:20',
            'brand_description' => 'required|min:5|max:50',
            'publication_status' => 'required'
        ]);
    }
    public function manageProduct(){
        return view('admin.product.manage-product');
    }

}
