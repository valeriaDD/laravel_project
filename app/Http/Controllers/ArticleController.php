<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use App\Services\ModelLogger;
use Psr\Log\LoggerInterface;

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

    public function show($id, Request $request, ModelLogger $logger)
    {

        $article = Article::where('id', $id)->first();
    

        $logger->logModel($request->user(), $article);
        

        return view('NoutatiPage.noutatePage', compact('article'));
    }
}
