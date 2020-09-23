<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class shoppingcartController extends Controller
{
	private $cart = array();
	
	public function __construct()
	{
		var_dump(session('cart'));

		if (session()->has('cart')){
			$this->cart = session('cart');
		} else {
			session('cart');
			$this->cart = session('cart');
		}
	}

	public function addToCart($id)
	{
		var_dump($this->cart);
		
		$found=false;
		echo 'bla';
		foreach($this->cart as $key => $product) {
			echo $product['id'];
			if ($product['id'] == $id){
				$found=true;
				echo 'bla';
				$this->cart[$key]['quantity'] = intval($_GET['qty']);
			}
		}

		if ($found == false){
			$article = Articles::where('id', $id)
				->select('id','name','price')
				->first();
		
			$product = array(
				'id' => $article->id,
				'name' => $article->name,
				'price' => floatval($article->price),
				'quantity' => intval($_GET['qty']));

			array_push($this->cart, $product);
		}
		session()->put('cart', $this->cart);
		unset($this->cart);
		//dd(session('cart'));
		return redirect(url('/store'));
	}
	public function index()
	{
		//return view('shoppingCart/cart');
		dd(session('cart'));
	}
}
