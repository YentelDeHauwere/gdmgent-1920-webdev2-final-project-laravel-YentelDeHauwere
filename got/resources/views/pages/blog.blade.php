@extends('layout')

@section('content')

<div class="container-fluid">
	<img class="blog-right-image" src="{{$blog->image}}" alt="blog">
	<small class="blog-left-author">Posted By Henry</small>
	<h6 class="blog-left-title"> {{$blog->title}} </h6>
	<p class="blog-left-intro"> {{$blog->intro}} </p>
	<p class="blog-left-intro"> {{$blog->content}} </p>
						
</div>

@endsection
