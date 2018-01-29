@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Category</h4>
                </div>
                <div class="panel-body">
{{--                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>--}}
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>Short Description</th>
                            <th>Product Image</th>
                            <th>publication Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Alive</td>
                            <td>Alive</td>
                            <td>Alive</td>
                            <td>Alive</td>
                            <td>Alive</td>
                            <td>Alive</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection