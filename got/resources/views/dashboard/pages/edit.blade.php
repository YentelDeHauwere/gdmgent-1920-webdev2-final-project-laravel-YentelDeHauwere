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
				Edit Page
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="{{ route('dashboard.pages.edit', $page->id)}}" method="post">
					@csrf

				<input type="hidden" name="id" value="{{$page->id}}">

					<div class="form-group">
						<label for="title">Title</label>
						<input value="{{$page->title}}" type="text" name="title" class="form-control" id="title" placeholder="Place title here">
					</div>
					<div class="form-group">
						<label for="active">Active</label>
						<select class="form-control" id="active" name="active">
							<option @if($page->active) selected @endif value="1">Visible</option>
							<option @if(!$page->active) selected @endif value="0">Invisible</option>
						</select>
					</div>
					<div class="form-group">
						<label for="intro">Intro</label>
						<textarea class="form-control" id="intro" name="intro" rows="6">{{$page->intro}}</textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea id="content" name="content">{{$page->content}}</textarea>
					</div>
					<div class="form-group">
						<label for="template">Template</label>
						<input value="{{$page->template}}" type="text" name="template" class="form-control" id="template" placeholder="Template">
					</div>
					<button class="btn btn-warning" type="submit">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection
