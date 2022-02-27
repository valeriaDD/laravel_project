<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    public function updateArticle($id, Request $request): JsonResponse
    {

        $article = Article::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:30',
            'description' => 'required|string',
        ]);
        if ($validator->fails()) {
            return $this->responseFactory->json(['message' => 'Validation Fails'], 400);
        }
        $validated = $validator->validated();

        if ($article) {
            $article->update(array('title' => $validated['title'],
                'description' => $validated['description'],
            ));
            return $this->responseFactory->json(['message' => 'updated successfully '], 200);
        }
        return $this->responseFactory->json(['message' => 'Article not found'], 400);
    }

    public function storeArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:30',
            'description' => 'required|string|min:10',
            'category' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->responseFactory->json([$validator->messages()], 400);
        }

        $article = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => 1,
            'image' => $request->file('image')->store('/', 'public'),
            'excerpt' => Str::limit($request->description, 200),
            'category_id' => $request->category,
            'seo_title' => $request->title,
            'seo_description' => Str::limit($request->description, 200),
            'published_at' => new Carbon(),
        ]);

        return $this->responseFactory->json(['id' => $article->id], 201);
    }


    public function getMostPopularArticles()
    {
        $mostPopularArticles = Article::all()
            ->sortByDesc('view_count')
            ->take($itemCount = 5);
        $articlesArray = [];
        foreach ($mostPopularArticles as $article) {
            $articlesArray[] = [
                'id' => $article->id,
                'title' => $article->title,
                'excerpt' => $article->excerpt,
                'view_count' => $article->view_count,
            ];
        }
        return $this->responseFactory->json($articlesArray, 200);
    }
}
