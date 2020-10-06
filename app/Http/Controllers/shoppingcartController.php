<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\session\shoppingCart;
use App\Articles;

class shoppingcartController extends Controller
{
	/* index
	returns the index page of the shopping cart which is the check cart page
	*/
	public function index()
	{
		session('cart')->howMuchMoneys();

		$macFuckingMuffin = session('cart')->getCart();
		$moneysToGive = session('cart')->moneysToGive();
		return view('shoppingCart/cart', compact('macFuckingMuffin', 'moneysToGive'));
	}

	/* addToCart
	sets stuff to get added to the cart or edit what was in there
	and then redirects you to the cart so ya can see it has been added/edited
	*/
	public function addToCart(Request $request)
	{
		$cart = session()->get('cart');
        if ($cart == null) {
           $cart = new shoppingCart($request);
        }
		$cart->putIntoCart($request);
		return redirect(url('/shoppingcart'));
	}

	/*delete
	makes the model delete the item with the given id
	and then puts ya back to your cart so ya can see it has been deleted
	*/
	public function delete($id)
	{
		session('cart')->deleteItem($id);
		return redirect(url('/shoppingcart'));
	}
}
