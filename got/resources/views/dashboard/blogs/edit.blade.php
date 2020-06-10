@extends('layout')

@section('scripts')
<script>
	tinymce.init({
	  selector: '#content',
	  height : "480"
	});
  </script>
@endsection

@section('content')
	<div class="container-fluid dashboard">
		<div class="row">
			<div class="col-12">
				Edit blog
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="{{ route('dashboard.blogs.edit', $blog->id)}}" method="post">
					@csrf

				<input type="hidden" name="id" value="{{$blog->id}}">

					<div class="form-group">
						<label for="title">Title</label>
						<input value="{{$blog->title}}" type="text" name="title" class="form-control" id="title" placeholder="Place title here">
					</div>
					<div class="form-group">
						<label for="intro">Intro</label>
						<textarea class="form-control" id="intro" name="intro" rows="6">{{$blog->intro}}</textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea id="content" name="content">{{$blog->content}}</textarea>
					</div>
					<button class="btn btn-warning" type="submit">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection
