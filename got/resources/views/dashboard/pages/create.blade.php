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
				Create Page
			</div>
		</div>

        <div class="row">
            <div class="col">
				<form action="{{ route('dashboard.pages.create')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Place title here">
					</div>
					<div class="form-group">
						<label for="active">Active</label>
						<select class="form-control" id="active" name="active">
						  <option value="1">Visible</option>
						  <option value="0">Invisible</option>
						</select>
					</div>
					<div class="form-group">
						<label for="intro">Intro</label>
						<textarea class="form-control" id="intro" name="intro" rows="6"></textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea id="content" name="content"></textarea>
					</div>
					<div class="form-group">
						<label for="template">Template</label>
						<input value="default" type="text" name="template" class="form-control" id="template" placeholder="Template">
					</div>
					<button class="btn btn-warning" type="submit">
						Submit
					</button>
				</form>
            </div>
        </div>
    </div>
@endsection
