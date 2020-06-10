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
				Create Blog
			</div>
		</div>

        <div class="row">
            <div class="col">
				<form action="{{ route('dashboard.blogs.create')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Place title here">
					</div>
					<div class="form-group">
						<label for="intro">Intro</label>
						<textarea class="form-control" id="intro" name="intro" rows="6"></textarea>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea id="content" name="content"></textarea>
					</div>
					<button class="btn btn-warning" type="submit">
						Submit
					</button>
				</form>
            </div>
        </div>
    </div>
@endsection
