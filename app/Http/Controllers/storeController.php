<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class storeController extends Controller
{
	/* Articles index
	returns the index page of the store page which is the page with all the articles you can put into your cart
	*/
    public function index()
	{
		$categories = Categories::all();
		$articles = Articles::all();
		
		return view('store/store', compact('articles', 'categories'));
	}
}
