<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to('info@gdpa.ge')->send(new ContactUs($request->all()));

        return redirect()->route('contact')->with('emailSent', 'პროფილი წარმატებით შეიქმნა');
    }
}
