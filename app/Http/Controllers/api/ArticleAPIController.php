<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Routing\ResponseFactory;

class ArticleAPIController extends Controller
{
     /** @var ResponseFactory */
     private $responseFactory;

     /**
      * @param ResponseFactory $responseFactory
      */
     public function __construct(ResponseFactory $responseFactory)
     {
         $this->responseFactory = $responseFactory;
     }

     public function updateArticle($id, Request $request) : JsonResponse{

        $article = Article::find($id);

        if($article){
            $article->update(array('title' => $request->input('title'),
                                    'description' => $request->input('description'),
                                    'image' => 'e963ea7695c2d577b8f575b1059626bb.png',
                                    'excerpt' => $request->input('excerpt'),
                                    'seo_title' => $request->input('seo_title'),
                                    'seo_description' => $request->input('seo_description'),
                            ));
           
            return $this->responseFactory->json(['message' => 'updated successfully '], 200);
        }

        return $this->responseFactory->json(['message' => 'Article not found'], 400);
     }
}