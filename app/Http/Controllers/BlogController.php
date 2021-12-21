<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function sendContact() {
        return view('ContactPage.contactPage');
    }
}

