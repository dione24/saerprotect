<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }


    public function message(Request $request)
    {
        $name = $request->username;
        $email = $request->email;
        $message = $request->message;
        $telephone = $request->telephone;
        $titre = $request->titre;

        //USe Mail Facade to send email
        Mail::send('emails.message', [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'telephone' => $telephone,
            'titre' => $titre,
        ], function ($mail) use ($email, $name, $message, $telephone, $titre) {
            $mail->from($email, $name);
            $mail->to('contact@saerprotect.com')->subject('Message de ' . $name)
                ->setBody('Message de ' . $name . ' ' . $email . ' ' . $message . ' ' . $telephone . ' ' . $titre);
        });
    }
}