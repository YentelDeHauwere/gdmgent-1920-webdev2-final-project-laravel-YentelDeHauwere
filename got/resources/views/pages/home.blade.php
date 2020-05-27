@extends('layout')

@section('content')

<h1>home</h1>
<form action="" method="post">
		@csrf

		<input type="text" name="name" id="name" placeholder="Naam">
		<input type="email" name="email" id="email" placeholder="E-mail">
		<input type="text" name="subject" id="subject" placeholder="Onderwerp">
		<textarea name="content" id="content" cols="30" rows="10" placeholder="Bericht"></textarea>
		<button type="submit">Verzend</button>
	</form>

@endsection
