<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Blog;

class DonateController extends Controller
{
	
	public function getIndex() {
		return view('donate.donate');
	}
}
