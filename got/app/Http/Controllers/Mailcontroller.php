<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	protected $errorBag = 'mailForm';

    public function getContact() {
		return view('pages.home');
	}

	public function postContact(Request $r) {
		
		$data = [
			'name' => $r->name,
			'email' => $r->email,
			'subject' => $r->subject,
			'content' => $r->content
		];



		Mail::send('mails.contact', $data, function ($message) use($r) {
			$message->sender(env('MAIL_FROM_ADDRESS'), 'Yentel De Hauwere');
            $message->to('yentdeha@student.arteveldehs.be', 'Yentel De Hauwere');
            $message->cc($r->email, $r->name);
            //$message->bcc('frederick.roegiers@arteveldehs.be', 'Fredrick Rogiers');
            $message->subject($r->subject);
			// $message->priority(3);
			// $message->attach('pathToFile');
		}); 

		return view('pages.home');
	}
}
