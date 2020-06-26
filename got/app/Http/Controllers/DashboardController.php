<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Page;

class DashboardController extends Controller
{

	public function getIndexPages() {
		$pages = Page::all();
		return view('dashboard.pages.index', ['pages' => $pages]);
	}

    public function getCreatePage() {
		return view('dashboard.pages.create');
	}

	public function postCreatePage(Request $r) {
		$page = new Page();
		$page->title = $r->title;
		$page->slug = Str::snake($r->title);
		$page->intro = $r->intro;
		$page->content = $r->content;
		$page->template = $r->template;
		$page->save();

		return redirect()->route('dashboard.pages.index');

	}

	public function getEditPage(Page $page) {
		return view('dashboard.pages.edit', ['page' => $page]);
	}

	public function postEditPage(Page $page, Request $r) {

		if($r->id != $page->id) abort('403', 'Elaba, snoeper');

		$page->title = $r->title;
		$page->slug = Str::snake($r->title);
		$page->intro = $r->intro;
		$page->content = $r->content;
		$page->template = $r->template;
		$page->save();

		return redirect()->route('dashboard.pages.index');
	}

	public function getDeletePage($id) {
		$page = Page::where('id', $id);
		$page->delete();
		return redirect()->route('dashboard.pages.index');
	}
}
