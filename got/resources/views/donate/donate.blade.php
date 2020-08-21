@extends('layout')

<style>
	.container-fluid.donate {
		background: linear-gradient(0deg, rgba(2,2,2,1) 0%, rgba(2,2,2,0.6) 40%), url(../images/background4.jpg);	
		display: flex;
		justify-content: start;
		align-items: center;
		overflow: hidden;
		background-position: right bottom;
		background-size: cover;
	}

	.donation-cards {
		display: flex;
		justify-content: center
	}

	.col-12.col-md-4.donation-card {
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		align-items: center;
		text-align: center;
		background: rgba(255, 255, 255, 0.01);
		max-width: 200px;
		border: 1px solid white;
		height: 300px;
		margin: 3rem;
	}

	.price {
		margin-top: 3rem;
		font-weight: 500;
		font-size: 34px
	}

	.btn-card {
		background: #2775A3;;
		color: white;
		padding: 8px 20px;
		font-weight: 600;
		border: none;
	}

	.col.cart {
		max-width: 400px;
		margin: 2rem 0 4rem;
	}

	.cart-bottom {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-top: 3rem;
	}
</style>

@section('content')

<div class="container-fluid donate">
	<div class="row">
		<div class="col">
			<h1 class="big-title text-center">Game of Thrones: Donations</h1>
			<p class="text-center" style="margin: 3rem 0 6rem;">Explore the world of Game of Thrones and earn your place on the Iron Throne. Ready to become the Lord of Seven Kingdoms? Lead your great house into epic PVP battles. For the Throne. Strategy Browser Game. </p>
		</div>
	</div>
</div>
<div class="container-fluid">

	{{-- <div class="card">
		<p style="color: black;">Winkelmandje: {{ $cart->getContent()->count()}} // <strong style="color: black;">€ {{ $cart->getTotal()}}</strong></p>
		<ul>
			@foreach ($cart->getContent() as $cartItem)
				<li style="color: black;">{{ $cartItem->name }} € {{ $cartItem->price }}</li>
			@endforeach
		</ul>
		<a href="{{ route('donate.checkout') }}" class="btn btn-warning">Checkout</a>
	</div> --}}

	<div class="row">
		<div class="col cart">
			<h2>Donation Cart</h2>
			<hr style="border: 1px solid white;">
			<ul style="list-style-type: none; padding: 0;">
				@foreach ($cart->getContent() as $cartItem)
					<li>
						<strong>€ {{ $cartItem->price }}</strong>
						<p>{{ $cartItem->name }} </p>
					</li>
				@endforeach
			</ul>
			<div class="cart-bottom">
				<a href="{{ route('donate.checkout') }}" class="btn-card">Checkout</a>
				<strong style="color: white;">TOTAL: € {{ $cart->getTotal()}}</strong>
			</div>
		</div>
	</div>

	<div class="row donation-cards">
		@foreach($donations as $donation)
		<div class="col-12 col-md-4 donation-card">
			<div>
				<h6>{{ $donation->title }}</h6>
				<h2 class="price">€ {{ str_replace('.', ',', $donation->price ) }}</h2>
			</div>
			<form action="" method="post">
				@csrf
				<input type="hidden" name="donation_id" value="{{ $donation->id }}">
				<button class="btn-card">Add to Cart</button>
			</form>
		</div>
		@endforeach
	</div>
</div>

@endsection
