<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Kinetotherapeut;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $employees = Kinetotherapeut::all("name",'surname' ,'image');

        return view('HomePage.homePage', compact("employees"));
    }
}


