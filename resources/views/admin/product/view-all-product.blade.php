@extends('admin.master')
@section('title')
    Manage Ctegory
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">View Category</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>Product Id</th>
                            <td>{{$products->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$products->product_name}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{$products->category_id}}</td>
                        </tr>
                        <tr>
                            <th>Brand name</th>
                            <td>{{$products->brand_id}}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$products->product_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{$products->product_quantity}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($products->product_image)}}" alt="Product Image" height="200" width="200"></td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{$products->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{{$products->long_description}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection