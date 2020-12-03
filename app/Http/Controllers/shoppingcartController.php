<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\session\shoppingCart;
use App\Articles;
use App\Orders;

class shoppingcartController extends Controller
{
	/* your cart index
	returns the index page of the shopping cart which is the check cart page
	*/
	public function index()
	{
		$cart = new shoppingCart();
		$yourCart = $cart->getCart();
		$totalPrice = $cart->totalPrice();
		return view('shoppingCart/cart', compact('yourCart', 'totalPrice'));
	}

	/* addToCart
	sets stuff to get added to the cart or edit what was in there
	and then redirects you to the cart so ya can see it has been added/edited
	*/
	public function addToCart(Request $request)
	{
		$id = $request->id;
		$qty = $request->qty;
		$cart = new shoppingCart();
		$cart->putIntoCart($id, $qty);
		return redirect(url('/shoppingcart'));
	}

	/* delete
	makes the model delete the item with the given id
	and then puts ya back to your cart so ya can see it has been deleted
	*/
	public function delete($id)
	{
		$cart = new shoppingCart();
		$cart->deleteItem($id);
		return redirect(url('/shoppingcart'));
	}

	/* placeOrder
	places the order into the database
	*/
	public function placeOrder(Request $request)
	{
		$cart = new shoppingCart();
		$cart->getCart();
		$cart->totalPrice();

		//looks if everything is there and checks if its a valid thing
		$validatedData = $request->validate([
			'address' => 'required',
			'location' => 'required'
		]);
		
		// makes a new order with the given values using the fillable
		$newOrder = new Orders();
		$newOrder->address = $validatedData['address'];
		$newOrder->location = $validatedData['location'];
        $newOrder->total_price = $totalPrice;
        $newOrder->user_id = Auth::user()->id;
		
		$newOrder->save();

		// puts all the items in the articles_orders table linked to the order_id
        foreach ($yourCart as $cartItem) {
			$newOrder->articles()->attach($cartItem['id'], ["amount" => $cartItem['quantity']]);
		}

		$cart->emptyCart();
		return redirect(url('/home'));
	}

	/* order index
	returns the index page of the order page which is the page where you need to fill in some details to place your order
	*/
	public function order()
	{
		return view('/store/order');
	}
}
