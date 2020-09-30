<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session\shoppingcart;
use App\Articles;

class shoppingcartController extends Controller
{
	public function index()
	{
		return view('shoppingCart/cart');
		//dd(session('cart'));
	}

	public function addToCart($id)
	{
		putIntoCart($id);
	}
}
