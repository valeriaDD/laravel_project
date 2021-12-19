<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function sendContact() {
        return view('NoutatiPage/noutatiPage');
    }

    public function showContact () {
        return view('showContact');
    }
}
