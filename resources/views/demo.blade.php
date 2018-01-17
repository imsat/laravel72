{{--<h1>{{"hello world"}}</h1>--}}
<h1>{!! "hello world 2"!!}</h1>
<hr>

{{--<a href="{{url('/new-one')}}">Home</a>--}}
{{--<a href="{{url('/new-two')}}">About</a>--}}

{{--<a href="{{URL::to('/new-one')}}">Home</a>--}}
{{--<a href="{{URL::to('/new-two')}}">About</a>--}}

<a href="{{route('new-one')}}">Home</a>
<a href="{{route('new-two')}}">About</a>
<hr>
<h1>{{$name}}</h1>