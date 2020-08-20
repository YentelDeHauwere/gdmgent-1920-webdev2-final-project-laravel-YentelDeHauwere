<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Blog;

class PageController extends Controller
{
    public function home() {
		return view('pages.home');
	}

	public function blogs() {
		$blogs = DB::table('blogs')->paginate(7);
		return view('pages.blogs', ['blogs' => $blogs]);
	}

	public function blogDetail(Blog $blog) {
		return view('pages.blog', ['blog' => $blog]);
	}
}
