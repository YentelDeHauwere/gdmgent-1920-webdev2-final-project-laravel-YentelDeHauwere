<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebHookController extends Controller
{
    public function handle(Request $request) {
		Log::info('This WebHook is from mollie');

        if (! $request->has('id')) {
			Log::info('No id for this payment');
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            Log::info('Payment has been made');
        } else {
			Log::warning('Error with payment');
		}
    }
}
