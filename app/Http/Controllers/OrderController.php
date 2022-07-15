<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {
        $order = Order::All();
        return view('orders.index')->with('orders', $order);
    }


    public function create()
    { 
        $cars = Car::All();
        $order = Order::All();
        return  view('orders.create')->with('car', $cars)->with('orders',$order);
    }

    public function store(Request $request)
    {

      $data = $request->validate([
         'users_id' => 'required',
         'cars_id' => 'required',
         'total_amount' => 'required',
         'payment_completed' => 'required',
	     'payment_method' => 'required'
      ]);

      $order = Order::create($data);
      return redirect()->route('orders.index')->with('success', 'Order with a ID USER  '.$order->users_id .'  has been completed!!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('danger', 'Order with USERS_ID  ' . $order->users_id .'  has been delete!');
    }

    
}
