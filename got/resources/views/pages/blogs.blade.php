@extends('layout')

@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		@foreach($blogs as $blog)
			<div class="col-10 col-xl-6 px-md-5">

				<div class="row div mx-auto">

					<div class="col-12 col-xl-4 blog-right">
						<img class="blog-right-image" src="{{$blog->image}}" alt="blog">
					</div>

					<div class="col-12 col-xl-8 blog-left">
						<div class="blog-text">
							<small class="blog-left-author">Posted By Henry</small>
							<h6 class="blog-left-title"> {{$blog->title}} </h6>
							<p class="blog-left-intro"> {{$blog->intro}} </p>
						</div>
						<a class="svg-wrapper" href="{{ route('blogs.detail', $blog->id) }}" type="button">
							<svg height="50" width="246" xmlns="http://www.w3.org/2000/svg">
							<div class="button-text submit">Read More <i class="fa fa-angle-right"  aria-hidden="true"></i>
							</div>
							</svg>
						</a>
					</div>
			
				</div>
			</div>
		@endforeach
	</div>
<span>{{$blogs->links()}}</span>
</div>

@endsection
