<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Blog;

class BlogController extends Controller
{
    public function getIndexBlogs() {
		$blogs = Blog::all();
		return view('dashboard.blogs.index', ['blogs' => $blogs]);
	}

	public function getCreateBlog() {
		return view('dashboard.blogs.create');
	}

	public function postCreateBlog(Request $r) {
		$blog = new Blog();
		$blog->title = $r->title;
		$blog->slug = Str::snake($r->title);
		$blog->intro = $r->intro;
		$blog->content = $r->content;
		$blog->template = $r->template;
		$blog->save();

		return redirect()->route('dashboard.blogs.index');

	}

	public function getEditBlog(Blog $blog) {
		return view('dashboard.blogs.edit', ['blog' => $blog]);
	}

	public function postEditBlog(Blog $blog, Request $r) {

		if($r->id != $blog->id) abort('403', 'Elaba, snoeper');

		$blog->title = $r->title;
		$blog->slug = Str::snake($r->title);
		$blog->intro = $r->intro;
		$blog->content = $r->content;
		$blog->template = $r->template;
		$blog->save();

		return redirect()->route('dashboard.blogs.index');
	}

	public function getDeleteBlog($id) {
		$blog = Blog::where('id', $id);
		$blog->delete();
		return redirect()->route('dashboard.blogs.index');
	}
}
