<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class storeController extends Controller
{
    public function index()
	{
		$articles = Articles::all();
		$categories = Categories::all();
		return view('store/store', compact('articles','categories'));
	}
}
