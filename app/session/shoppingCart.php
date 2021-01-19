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
	private $totalPrice = 0;
	
	public function __construct()
	{
		if (!session()->has('cart')){
			$this->cart = [];
		} else {
			$this->cart = session('cart')->cart;
		}
	}

	/* putIntoCart
	puts what i post into the cart or 
	checks if its already there and changes the given quantity to the new given quantity(edit)
	*/
	public function putIntoCart($id, $qty)
	{
		$found = false;
		foreach($this->cart as $key => $product) {
			if ($product['id'] == $id){
				$found = true;
				$this->cart[$key]['quantity'] = intval($qty);
			}
		}

		if ($found == false){
			$article = Articles::where('id', $id)
				->select('name','price')
				->first();
		
			$product = array(
				'id' => $id,
				'name' => $article->name,
				'price' => floatval($article->price),
				'quantity' => intval($qty));

			array_push($this->cart, $product);
		}
		session()->put('cart', $this);
	}

	/* deleteItem
	deletes the item with the given id from the cart
	*/
	public function deleteItem($id)
	{
		foreach($this->cart as $key => $product) {
			if ($product['id'] == $id){
				unset($this->cart[$key]);
				session()->put('cart', $this);
			}
		}
	}

	/*priceCalc
	calculates the total amount of money the user/costumer has to pay
	*/
	public function priceCalc()
	{
		$total = 0;
		foreach($this->cart as $product){
			$total += $product['price'] * $product['quantity'];
		}

		$this->totalPrice = $total;
	}

	/* totalPrice 
	getter for the total money
	*/
	public function totalPrice()
	{
		$this->priceCalc();
		return $this->totalPrice;
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
		session()->forget('cart');
	}
}