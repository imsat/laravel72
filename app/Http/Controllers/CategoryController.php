<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        return view('admin.category.manage-category');
    }
    public function saveCategory(Request $request){
//        $category = new Category();
//        $category->category_name = $request->category_name;
//        $category->category_description = $request->category_description;
//        $category->publication_status = $request->publication_status;
//        $category->save();

//        Category::create($request->all());
//
        DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'publication_status' => $request->publication_status
        ]);

        return 'Success';

    }
}
