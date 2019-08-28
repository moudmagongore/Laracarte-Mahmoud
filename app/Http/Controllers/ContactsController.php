<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;
/*use MercurySeries\Flashy\Flashy;
*/use Flashy;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
    	$mailable = new ContactMessageCreated($request->name, $request->email, $request->message);

    	Mail::to('admin@laracarte.com')->send($mailable);

    	 Flashy('Nous vous répondrons dans les plus brefs délais!');

    	return redirect()->route('root_path');

        
    }
}