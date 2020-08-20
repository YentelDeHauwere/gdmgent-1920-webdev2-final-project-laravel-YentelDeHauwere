@extends('layout')
<style>
	#blogs {
		list-style-type: none;
		padding: 0;
	}

	#firstBlog {
		display: flex;
		padding: 22vh 100px 22vh 12vw;
	}
</style>
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center" id="blogs">
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

<script>

function myFunction(x) {
  if (x.matches) { // If media query matches
  } else {
	const firstBlog = document.getElementById('blogs').querySelectorAll(".col-10");
	firstBlog[0].className = 'col-12';
	
	firstBlog[0].setAttribute('id', 'firstBlog')
  }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

	
</script>

@endsection
