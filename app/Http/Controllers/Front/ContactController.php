<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Front\Mails;
use App\Traits\StoreTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(ContactRequest $request, Mails $mails){

        $mails->create($request->all());

        Mail::to(config("mail.address"))->send(new ContactMail($request->all()));

        return redirect('front.homepage');
    }
}
