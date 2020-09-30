<?php

namespace App\session;

use Illuminate\Http\Request;
use App\Articles;
use App\Categories;

class shoppingcart
{
	public $cart;
	
	public function __construct($request)
	{
		if (!$request->session()->has('cart')){
			$this->cart = NULL;
		} else {
			$this->cart = $request->session('cart');
		}
		//var_dump(session('cart'));
	}

	public function putIntoCart($request, $id)
	{
		//var_dump($this->cart);
		
		$found = false;
		//echo 'bla1';
		foreach($this->cart as $key => $product) {
			//echo $product['id'];
			if ($product['id'] == $id){
				$found = true;
				//echo 'bla2';
				$this->cart[$key]['quantity'] = intval($_GET['qty']);
			}
		}

		if ($found == false){
			//echo 'false?';
			$article = Articles::where('id', $id)
				->select('id','name','price')
				->first();
		
			$product = array(
				'id' => $article->id,
				'name' => $article->name,
				'price' => floatval($article->price),
				'quantity' => intval($_GET['qty']));

			array_push($this->cart, $product);
			//var_dump($this->cart);
		}
		$request->session()->put('cart', $this->cart);
		//var_dump(session('cart'));
		return redirect(url('/store'));
	}
	
	/*
	public function addToCart(Request $request, $id)
	{
		$article = Articles::where('id', $id)
        ->select('id','name','price')
		->first();
		
		$toAdd = array(
			'id' => $article->id,
			'name' => $article->name,
			'price' => floatval($article->price),
			'quantity' => intval($_GET['qty']));

		$request->session()->push('cart', $toAdd);
		$request->session()->save();
		dd(session('cart'));
		//return redirect(url('/store'));
	}
	*/
}