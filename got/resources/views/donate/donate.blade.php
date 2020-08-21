@extends('layout')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h1 class="big-title text-center">Game of Thrones: Conquest</h1>
			<p class="text-center">Explore the world of Game of Thrones and earn your place on the Iron Throne. Ready to become the Lord of Seven Kingdoms? Lead your great house into epic PVP battles. For the Throne. Strategy Browser Game. </p>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col">

			<div class="card">
				<p style="color: black;">Winkelmandje: {{ $cart->getContent()->count()}} // <strong style="color: black;">€ {{ $cart->getTotal()}}</strong></p>
				<ul>
					@foreach ($cart->getContent() as $cartItem)
						<li style="color: black;">{{ $cartItem->name }} € {{ $cartItem->price }}</li>
					@endforeach
				</ul>
			<a href="{{ route('donate.checkout') }}" class="btn btn-warning">Checkout</a>
			</div>

			{{-- Winkelmandje: {{ $cart->count()}}
			<ul>
				@foreach ($cart as $cartItem)
			<li>{{ $cartItem->name }} {{ $cartItem->price }}</li>
				@endforeach
			</ul> --}}

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Titel</th>
						<th>Prijs</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($donations as $donation)
					<tr>
						<td>{{ $donation->title }}</td>
						<td>€ {{ str_replace('.', ',', $donation->price ) }}</td>
						<td>
							<form action="" method="post">
								@csrf
								<input type="hidden" name="donation_id" value="{{ $donation->id }}">
								<button class="btn-primary">Donate</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>

@endsection
