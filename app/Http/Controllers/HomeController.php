<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact(Request $request)
    {

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message'   => $request->message
        ];

        Mail::to('destinatario@example.com')->send(new ContactMailable($details));
        return back();
    }
}
