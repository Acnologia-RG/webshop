<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class CategoriesController extends Controller
{
	/* index
	returns the index page of the category page which is the page with everything of the one requested category
	*/
	public function index($id)
	{   
		$category = Categories::find($id);
		$articles = Articles::where('category_id', $id)->get();

		return view('store/category', compact('articles','category'));
	}
}
