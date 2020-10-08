<?php

namespace App\session;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class shoppingCart
{
	/*
	this is the shopping cart model
	its got 2 protected var's with a function to get them out of the shoppingCart(getters)
	
	__construct always gets executed
	the construct looks if a session cart already exists
	if so it fills $cart with that
	if not it makes it into an empty array
	*/
	protected $cart;
	protected $totalMoneys = 0;
	
	public function __construct()
	{
		if (!session()->has('cart')){
			$this->cart = [];
		} else {
			$this->cart = session('cart');
		}
	}

	/* putIntoCart
	puts what i post into the cart or 
	checks if its already there and changes the given quantity to the new given quantity(edit)
	*/
	public function putIntoCart($request)
	{
		$found = false;
		foreach($this->cart as $key => $product) {
			if ($product['id'] == $request->id){
				$found = true;
				$this->cart[$key]['quantity'] = intval($request->qty);
			}
		}

		if ($found == false){
			$article = Articles::where('id', $request->id)
				->select('id','name','price')
				->first();
		
			$product = array(
				'id' => $article->id,
				'name' => $article->name,
				'price' => floatval($article->price),
				'quantity' => intval($request->qty));

			array_push($this->cart, $product);
		}
		$request->session()->put('cart', $this);
	}

	/* deleteItem
	deletes the item with the given id from the cart
	*/
	public function deleteItem($id)
	{
		foreach($this->cart as $key => $product) {
			if ($product['id'] == $id){
				unset($this->cart[$key]);
			}
		}
	}

	/*howMuchMoneys
	calculates the total amount of money the user/costumer has to pay
	*/
	public function howMuchMoneys()
	{
		$moneys = 0;
		foreach($this->cart as $product){
			$moneys += $product['price'] * $product['quantity'];
		}

		$this->totalMoneys = $moneys;
	}

	/* moneysToGive 
	getter for the total money
	*/
	public function moneysToGive()
	{
		return $this->totalMoneys;
	}

	/* getCart 
	getter for the cart
	*/
	public function getCart()
	{
		return $this->cart;
	}

	/* emptyCart
	empties the cart for after placing an order
	*/
	public function emptyCart()
	{
		$this->cart = [];
	}
}