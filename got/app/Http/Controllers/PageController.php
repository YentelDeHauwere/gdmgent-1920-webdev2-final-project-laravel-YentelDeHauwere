<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
		return view('pages.home');
	}

	public function blogs() {
		return view('pages.blogs');
	}

	public function donate() {
		return view('pages.donate');
	}
}
