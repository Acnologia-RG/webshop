<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class shoppingcartController extends Controller
{
	/*
	public $cart = array();
	
	public function __construct()
	{
		if (session()->has('cart')){
			$this->cart = session('cart');
		}
		var_dump(session('cart'));
	}

	public function addToCart($id)
	{
		var_dump($this->cart);
		
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
			echo 'false?';
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
		//session('cart');
		session()->put('cart', $this->cart);
		var_dump(session('cart'));
		//return redirect(url('/store'));
	}
	*/
	
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
		session()->save();
		dd(session('cart'));
		//return redirect(url('/store'));
	}
	public function index()
	{
		return view('shoppingCart/cart');
		//dd(session('cart'));
	}
}
