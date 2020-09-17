<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class shoppingcartController extends Controller
{
	public function addToCart($id)
	{
		$article = Articles::where('id', $id)
        ->select('id','name','price')
		->first();
		
		$toAdd = array(
			'id' => $article->id,
			'name' => $article->name,
			'price' => floatval($article->price),
			'quantity' => intval($_GET['qty']));

		session()->push('cart', $toAdd);
		//dd(session('cart'));
		return redirect(url('/store'));
	}
	public function index()
	{
		//return view('shoppingCart/cart');
		dd(session('cart'));
	}
}
