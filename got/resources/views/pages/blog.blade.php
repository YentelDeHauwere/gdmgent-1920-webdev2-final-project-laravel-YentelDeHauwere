@extends('layout')
<style>
	.blog-left-content.detail {
		text-align: justify;
		max-width: 700px;
		margin-left: auto;
		margin-right: auto;
		line-height: 2.3;
		font-size: 16px;
		margin-top: 6rem;
	}

	.blog-left-intro.detail {
		font-size: 24px; 
		margin: 3rem 0;
		max-width: 1100px;
		margin-left: auto;
		margin-right: auto;
	}
</style>

@section('content')

<div class="container-fluid" style="text-align:center;">
	<img class="blog-right-image" src="{{$blog->image}}" alt="blog">
	<h2 class="big-title"> {{$blog->title}} </h2>
	<p class="blog-left-intro detail"> {{$blog->intro}} </p>
	<p class="blog-left-content detail"> {{$blog->content}} </p>
	<a class="goback"  href="{{ route('blogs') }}">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
		Go Back 
	</a>				
</div>

@endsection
