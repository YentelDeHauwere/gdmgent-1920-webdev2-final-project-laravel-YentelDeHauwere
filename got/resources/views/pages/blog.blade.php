@extends('layout')

@section('content')

<div class="container-fluid" style="text-align:center;">
	<img class="blog-right-image" src="{{$blog->image}}" alt="blog">
	<h6 class="blog-left-title"> {{$blog->title}} </h6>
	<p class="blog-left-intro"> {{$blog->intro}} </p>
	<p class="blog-left-intro"> {{$blog->content}} </p>
	<a class="goback"  href="{{ route('blogs') }}">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
		Go Back 
	</a>				
</div>

@endsection
