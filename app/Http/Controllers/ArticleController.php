<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('');
    }

    /**
     * 
     * @param int $id
     * @return Illuminate\Http\Response;
     */

    public function show($id)
    {
        return view('NoutatiPage.noutatePage')
                    ->with('article', Article::where('id', $id)->first());
    }
}
