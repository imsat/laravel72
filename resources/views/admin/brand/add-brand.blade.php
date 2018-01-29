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
                    {{Form::open(['route'=>'new-brand', 'method'=> 'POST', 'class'=>'form-horizontal'])}}
                    <div class="form-group">
                        <label class="control-label col-md-4">Brand Name</label>

                        <div class="col-md-8">
                            <input type="text" name="brand_name" class="form-control" placeholder="Brand Name"/>
                            <span class="text-danger">{{$errors->has('brand_name') ? $errors->first('brand_name') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Brand Description</label>

                        <div class="col-md-8">
                            <textarea name="brand_description" id=""  placeholder="Brand Description" class="form-control"></textarea>
                            <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description') : ' '}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Publication Status</label>

                        <div class="col-md-8 radio">
                            <label> <input type="radio" name="publication_status"  value="1"/>Published</label>
                            <label> <input type="radio" name="publication_status"  value="0"/>Unpublished</label>
                            <br>
                            <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status') : ' '}}</span>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info"/>
                        </div>
                    </div>

                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection