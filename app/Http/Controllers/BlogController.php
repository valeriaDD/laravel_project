<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $request = request()->all();
        $sort = $request['sort'] ?? 'DESC';

        $category = BlogCategory::all();
        $categories = $request['categories'] ?? $category->first()->id; 

        $articles = Article::orderBy('published_at', $sort)->paginate(4);
        $articles ->appends(['sort'=> $sort]) ;

        

        return view('NoutatiPage.noutatiPage', ['articles' => $articles, 
                                                'category' => $category,
                                                'filter' => ['sort' => $sort, 
                                                            'categories' => $categories]                                          
                                                ]);
    }



    
}

