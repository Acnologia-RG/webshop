<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class ArticleController extends Controller
{
	/* article index
	returns the index page of the article page which is the page with the article you requested to see from the store page
	*/
    public function index($id)
	{
        $article = Articles::where('articles.id', $id)
        ->join('categories', 'category_id', '=','categories.id')
        ->select('articles.id','name', 'price', 'description', 'category_name')
        ->first();
        
        return view('store/article', compact('article'));
    }
}
