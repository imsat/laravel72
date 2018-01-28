@extends('admin.master')
@section('title')
    Add Brand
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add New Brand</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <form action="{{route('new-brand')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>

                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control" placeholder="Brand Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Description</label>

                            <div class="col-md-8">
                                <textarea name="brand_description" id="" cols="70" rows="10" placeholder="Brand Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>

                            <div class="col-md-8 radio">
                                <label> <input type="radio" checked name="publication_status"  value="1"/>Published</label>
                                <label> <input type="radio" name="publication_status"  value="0"/>Unpublished</label>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection