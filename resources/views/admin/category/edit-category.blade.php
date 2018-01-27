@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Edit Category Form</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <form action="{{route('update-category')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Name</label>

                            <div class="col-md-8">
                                <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" placeholder="Category Name"/>
                                <input type="hidden" name="category_id" class="form-control" value="{{$category->id}}" placeholder="Category Name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Category Description</label>

                            <div class="col-md-8">
                                <textarea name="category_description" id="" cols="70" rows="10" placeholder="Category Description">{{$category->category_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>

                            <div class="col-md-8 radio">
                                <label> <input type="radio" checked name="publication_status"  value="1" {{ $category->publication_status == 1 ? 'checked' : '' }}/>Published</label>
                                <label> <input type="radio" name="publication_status"  value="0" {{ $category->publication_status == 0 ? 'checked' : '' }}/>Unpublished</label>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection