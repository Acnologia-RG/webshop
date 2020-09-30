<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class storeController extends Controller
{
    public function index()
	{
		$categories = Categories::all();
		$articles = Articles::all();
		//dd($articles); 
		
		return view('store/store', compact('articles', 'categories'));
	}
}
