<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class ArticleController extends Controller
{
    public function index($id)
	{
        $article = Articles::where('articles.id', $id)
        ->join('categories', 'category_id', '=','categories.id')
        ->select('name', 'price', 'description', 'category_name')
        ->first();
        //dd($article);
        
        return view('store/article', compact('article'));
    }
}
