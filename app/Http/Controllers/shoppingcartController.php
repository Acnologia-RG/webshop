<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session\shoppingCart;
use App\Articles;

class shoppingcartController extends Controller
{
	public function index()
	{
		session('cart')->howMuchMoneys();

		$macFuckingMuffin = session('cart')->getCart();
		$moneysToGib = session('cart')->moneysToGib();
		//dd(session('cart'));
		return view('shoppingCart/cart', compact('macFuckingMuffin', 'moneysToGib'));
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

	public function delete($id)
	{
		session('cart')->deleteItem($id);
		//dd(session('cart'));
		return redirect(url('/shoppingcart'));
	}
}
