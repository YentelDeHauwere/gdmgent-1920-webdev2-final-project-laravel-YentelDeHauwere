<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;


class DonationController extends Controller
{

	public function getSucces() {
		return redirect()->route('donate.index');
	}
	
	public function getIndex() {
		$donations = Donation::get();
		$cart = CartFacade::session(Auth::user()->id);

		return view('donate.donate', [
			'donations' => $donations,
			'cart' => $cart
		]);
	}

	public function postDonate(Request $r) {
		$donation = Donation::find($r->donation_id);
		$user = Auth::user()->id;

		\Cart::session($user)->add(array(
			'id' => $donation->id,
			'name' => $donation->title,
			'price' => $donation->price,
			'quantity' => 1,
			'attributes' => array(),
			'associatedModel' => $donation
		));
		
		return redirect()->route('donate.index');
	}


	public function getCheckout(Request $r) {
		$payment = Mollie::api()->payments->create([
			"amount" => [
				"currency" => "EUR",
				"value" => (string) CartFacade::session(Auth::user()->id)->getTotal(), 
			],
			"description" => "My first API payment with Laravel",
			"redirectUrl" => route('donate.succes'),
			"webhookUrl" => 'http://570e702a9042.ngrok.io',
		]);

		$payment = Mollie::api()->payments->get($payment->id);

		// redirect customer to Mollie checkout page
		return redirect($payment->getCheckoutUrl(), 303);
	}

}