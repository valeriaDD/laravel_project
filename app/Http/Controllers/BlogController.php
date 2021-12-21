<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $articles = Article::orderBy('created_at', 'DESC')->get()->all();

        return view('NoutatiPage.noutatiPage', ['articles' => $articles]);
    }
}

