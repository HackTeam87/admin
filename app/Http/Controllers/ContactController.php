<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;
class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.contact');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $contact = [];
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['msg'] = $request->get('msg');


        Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));

//        Mail::to($request->user())->send(new OrderShipped($order));

        flash('Your message has been sent!')->success();
        return redirect()->route('email.contact');
    }
}