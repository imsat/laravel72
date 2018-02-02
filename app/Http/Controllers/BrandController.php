<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }

    public function saveBrand(Request $request){

        $this->validate($request, [
            'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|min:2|max:20',
            'brand_description' => 'required|min:5|max:50',
            'publication_status' => 'required'
        ]);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/add')->with('message', 'Brand add Successfully');
    }
    public function manageBrand(){
        $brands = Brand::all();
        return view('admin.brand.manage-brand', ['brands'=>$brands]);
    }
    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('/brand/manage')->with('message', 'Brand Unpublished');
    }
    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('/brand/manage')->with('message', 'Brand Published');
    }
    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand', ['brand'=>$brand]);
    }
    public function updateBrand(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/manage')->with('message', 'Brand Updated!!!!!!');

    }
    public function deleteBrand($id){
    $brand = Brand::find($id);
    $brand->delete();
    return redirect('/brand/manage')->with('message', 'Brand Deleted Successfully');
    }
}
