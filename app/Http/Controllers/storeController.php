<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class storeController extends Controller
{
    public function index()
	{
		$articles = Articles::all();
		return view('store/store', compact('articles'));
	}
}
