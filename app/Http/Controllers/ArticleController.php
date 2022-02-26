<?php

namespace App\Http\Controllers;

use App\Http\Request\ArticlesCommentRequest;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\ModelLogger;


class ArticleController extends Controller
{
    public function index()
    {
        return view('');
    }

    /**
     *
     * @param int $id
     * @return Illuminate\Http\Response;
     */

    public function show($id, Request $request, ModelLogger $logger)
    {
        $article = Article::findOrFail($id);
        $article->view_count++;
        $article->save();
        $logger->logModel($request->user(), $article);

        return view('NoutatiPage.noutatePage', compact('article'));
    }

    public function create()
    {
        return view('NoutatiPage.create');
    }

    public function createComment($id, ArticlesCommentRequest $request)
    {
        $comment = new Comment;
        $comment->author_email = $request->author_email;
        $comment->message = $request->messageText;
        $comment->article_id = $id;

        $comment->save();
        return redirect()->back();
    }
}
