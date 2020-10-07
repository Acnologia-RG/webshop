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
	WIP
	*/
	public function show($id) {
        $order = Orders::find($id);
        $items = $order->articles()->withPivot('amount')->get();
        $amount = [];

        foreach ($items as $item) {
           array_push($amount, $item->pivot->amount);
        }

		dd($items, $amount, $order);
        return view("/placedOrdersDetails", compact('items', 'amount', 'order'));
    }
}
