<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Validator;

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

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:30',
            'description' => 'required|string',
        ]);
 
        if ($validator->fails()) {
            return $this->responseFactory->json(['message' => 'Validation Fails'], 400);
        }
        $validated = $validator->validated();


        if($article){
            $article->update(array('title' => $validated['title'],
                                    'description' => $validated['description'],
                            ));
           
            return $this->responseFactory->json(['message' => 'updated successfully '], 200);
        }

        return $this->responseFactory->json(['message' => 'Article not found'], 400);
     }
}