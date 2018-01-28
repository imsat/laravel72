@extends('admin.master')
@section('title')
    Manage Brand
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Brand</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SL No</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($z=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$z++}}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{$brand->publication_status == 1 ? 'Publushed' : 'Unpublushed' }}</td>
                                <td>
                                    @if($brand->publication_status == 1)
                                    <a href="{{route('unpublished-brand', ['id'=>$brand->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                        <a href="{{route('published-brand', ['id'=>$brand->id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-brand', ['id'=>$brand->id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-brand', ['id'=>$brand->id])}}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash" onclick="return confirm('Are you suru to delete!!!')"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection