<?php

namespace App\Http\Controllers;
use App\Category;
use App\Brand;
use App\Product;
use DB;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', ['categories'=>$categories, 'brands'=>$brands]);
    }
    public function saveProduct(Request $request){
        $this->validate($request, [
            'product_name' => 'required'
        ]);
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-image/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory, $imageName);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
        return redirect('/product/add')->with('message', 'Product Saved Successfully');

    }
    public function manageProduct(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=','brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();

        return view('admin.product.manage-product', ['products' => $products]);
    }
    public function viewProductDetails($id){
        $product = Product::find($id);
        return view('admin.product.view-all-product', ['product' => $product]);
    }

}
