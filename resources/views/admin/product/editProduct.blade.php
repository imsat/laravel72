@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Product Info</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    {{Form::open(['route'=>'update-product', 'method'=> 'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name' => 'updateProductForm'])}}
                        <div class="form-group">

                            <label class="control-label col-md-4 ">Category Name</label>

                            <div class="col-md-8">

                                <select name="category_id" id="" class="name form-control">
                                    <option value="">---Select Category---</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="control-label col-md-4 ">Brand Name</label>

                            <div class="col-md-8">

                                <select name="brand_id" id="" class="name form-control">
                                    <option value="">---Select Brand---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Name</label>

                            <div class="col-md-8">
                                <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" placeholder="Product Name"/>
                                <input type="hidden" name="product_id" value="{{$product->id}}" class="form-control" placeholder="Product Name"/>
                                <span class="text-danger">{{$errors->has('product_name') ? $errors->first('product_name') : ' '}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Price</label>

                            <div class="col-md-8">
                                <input type="number" name="product_price" value="{{$product->product_price}}" class="form-control" placeholder="Product Price"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Product Quantity</label>

                            <div class="col-md-8">
                                <input type="number" name="product_quantity" value="{{$product->product_quantity}}" class="form-control" placeholder="Product Quantity"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Short Description</label>

                            <div class="col-md-8">
                                <textarea name="short_description" placeholder="Short Description" class="form-control">{{$product->short_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Long Description</label>

                            <div class="col-md-8">
                                <textarea name="long_description" placeholder="Long Description" class="form-control" id="editor">{{$product->long_description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Product Image</label>
                            <div class="col-md-4 text-center">
                                <input type="file" name="product_image" class="" accept="image/*"/>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset($product->product_image)}}" alt="Product Image" height="200" width="200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>

                            <div class="col-md-8 radio">
                                <label> <input type="radio" name="publication_status"  value="1" {{$product->publication_status == 1 ? 'checked' : ''}}/>Published</label>
                                <label> <input type="radio" name="publication_status"  value="0" {{$product->publication_status == 0 ? 'checked' : ''}}/>Unpublished</label>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Product Info"/>
                            </div>
                        </div>

                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['updateProductForm'].elements['category_id'].value={{$product->category_id}}
        document.forms['updateProductForm'].elements['brand_id'].value={{$product->brand_id}}
    </script>
@endsection