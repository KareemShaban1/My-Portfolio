<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required|min:4',
        'message' => 'required',
    ]);

    Mail::to('shabankareem919@gmail.com')->send(new ContactFormMail($data));

    
    return redirect()->route('mailSuccess');
    // return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
}



}