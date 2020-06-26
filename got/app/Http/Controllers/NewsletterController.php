<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
	public function getEmail() {
		return view('pages.home');
	}

    public function postEmail(Request $r){
		Newsletter::subscribeOrUpdate($r->email);

		return redirect('/');
	}	
}
