<?php

namespace App\session;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class shoppingCart
{
	protected $cart;
	protected $totalMoneys = 0;
	
	public function __construct()
	{
		if (!session()->has('cart')){
			$this->cart = [];
		} else {
			$this->cart = session('cart');
		}
		//var_dump(session('cart'));
	}

	public function putIntoCart($request)
	{
		//var_dump($this->cart);
		
		$found = false;
		//echo 'bla1';
		foreach($this->cart as $key => $product) {
			//echo $product['id'];
			if ($product['id'] == $request->id){
				$found = true;
				//echo 'bla2';
				$this->cart[$key]['quantity'] = intval($request->qty);
			}
		}

		if ($found == false){
			//echo 'false?';
			$article = Articles::where('id', $request->id)
				->select('id','name','price')
				->first();
		
			$product = array(
				'id' => $article->id,
				'name' => $article->name,
				'price' => floatval($article->price),
				'quantity' => intval($request->qty));

			array_push($this->cart, $product);
			//var_dump($this->cart);
		}
		$request->session()->put('cart', $this);
		//var_dump(session('cart'));
	}

	public function deleteItem($id)
	{
		foreach($this->cart as $key => $product) {
			if ($product['id'] == $id){
				unset($this->cart[$key]);
			}
		}
	}

	public function howMuchMoneys()
	{
		$moneys = 0;
		foreach($this->cart as $product){
			$moneys += $product['price'] * $product['quantity'];
		}

		$this->totalMoneys = $moneys;
	}

	public function moneysToGib()
	{
		return $this->totalMoneys;
	}

	public function getCart()
	{
		return $this->cart;
	}
}