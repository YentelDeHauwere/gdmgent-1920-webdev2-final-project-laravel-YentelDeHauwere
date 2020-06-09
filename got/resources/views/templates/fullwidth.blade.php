@extends('layout')

@section('scripts')
	<script>
  </script>
@endsection

@section('content')
	<div class="container-fluid dashboard">
		<div class="row">
			<div class="col-12">
				<h1>{{ $page->title }}</h1>

				<blockquote>
					{{$page->intro}}
				</blockquote>

				{{!! $page->content !!}}
			</div>
		</div>
	</div>
@endsection
