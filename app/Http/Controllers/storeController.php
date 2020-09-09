<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class storeController extends Controller
{
    public function index()
	{
		$articles = Articles::join('categories', 'category_id', '=','categories.id')
		->get();
		//dd($articles); 
		
		
		return view('store/store', compact('articles'));
	}
}
