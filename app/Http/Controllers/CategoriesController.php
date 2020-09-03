<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class CategoriesController extends Controller
{
    public function index($id)
    {
        $articles = Articles::where('category_id', $id)->get();
        //dd($articles);

        return view('store/index', compact('articles'));
    }
}
