@extends('admin.master')
@section('title')
    Edit Brand
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
                    <form action="{{route('update-brand')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>

                            <div class="col-md-8">
                                <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}" placeholder="Brand Name"/>
                                <input type="hidden" name="brand_id" class="form-control" value="{{$brand->id}}" placeholder="Brand Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Description</label>

                            <div class="col-md-8">
                                <textarea name="brand_description" id="" cols="70" rows="10" placeholder="Brand Description">{{$brand->brand_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>

                            <div class="col-md-8 radio">
                                <label> <input type="radio" name="publication_status"  value="1" {{$brand->publication_status == 1 ? 'checked' : ''}} />Published</label>
                                <label> <input type="radio" name="publication_status"  value="0" {{$brand->publication_status == 0 ? 'checked' : ''}}/>Unpublished</label>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection