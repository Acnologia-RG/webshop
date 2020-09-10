<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class CategoriesController extends Controller
{
	public function index($id)
	{   
		$category = Categories::find($id);
		$articles = Articles::where('category_id', $id)->get();
		//look at the results of $articles or $categories by putting them into the dd()
		//dd();

		return view('store/category', compact('articles','category'));
	}
}
