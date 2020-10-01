<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session\shoppingCart;
use App\Articles;

class shoppingcartController extends Controller
{
	public function index()
	{
		$macFuckingMuffin = session('cart')->getCart();
		return view('shoppingCart/cart', compact('macFuckingMuffin'));
		//dd(session('cart'));
	}

	public function addToCart(Request $request)
	{
		$cart = session()->get('cart');
        if ($cart == null) {
           $cart = new shoppingCart($request);
        }
		$cart->putIntoCart($request);
		//dd(session('cart'));
		return redirect(url('/shoppingcart'));
	}
}
