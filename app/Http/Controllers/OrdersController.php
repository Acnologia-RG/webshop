<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\orders;
use App\user;

class OrdersController extends Controller
{
	/* order index
	index page for all your placed orders
	*/
    public function index()
	{
		$orders = Orders::all()->where('user_id', Auth::user()->id);

		return view('/store/placedOrders', compact('orders'));
	}

	/* show 
	shows details about the selected order
	*/
	public function show($id) {
		$user = Auth::user()->id;
		$order = Orders::find($id);
		if ($order == null || $user == null) {
			return redirect(url('/placedOrders'));

		} elseif ($user == $order->user_id) {
			$items = $order->articles()->withPivot('amount')->get();
			$amount = [];

			foreach ($items as $item) {
			array_push($amount, $item->pivot->amount);
			}

			return view("/store/placedOrdersDetails", compact('items', 'amount', 'order'));

		} else {
			return redirect(url('/placedOrders'));
		}
    }
}
