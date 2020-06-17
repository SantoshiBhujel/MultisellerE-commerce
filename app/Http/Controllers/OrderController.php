<?php

namespace App\Http\Controllers;

use App\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required'
        ]);

        $order= new Order();
        $order->order_number= \uniqid('OrderNumber-');
        $order->users_id= auth()->user()->id;


        $order->shipping_fullname= $request->shipping_fullname;
        $order->shipping_state = $request->shipping_state;
        $order->shipping_city = $request->shipping_city;
        $order->shipping_address = $request->shipping_address;
        $order->shipping_phone = $request->shipping_phone;
        $order->shipping_zipcode = $request->shipping_zipcode;

        if(!$request->has('billing_fullname'))
        {
            $order->billing_fullname= $request->shipping_fullname;
            $order->billing_state = $request->shipping_state;
            $order->billing_city = $request->shipping_city;
            $order->billing_address = $request->shipping_address;
            $order->billing_phone = $request->shipping_phone;
            $order->billing_zipcode = $request->shipping_zipcode;
        }

        else
        {
            $order->billing_fullname= $request->billing_fillname;
            $order->billing_state = $request->billing_state;
            $order->billing_city = $request->billing_city;
            $order->billing_address = $request->billing_address;
            $order->billing_phone = $request->billing_phone;
            $order->billing_zipcode = $request->billing_zipcode; 
        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->save();

        //save order items in orderitem table

        $cartItems= \Cart::session(auth()->id())->getContent();
        foreach($cartItems as $item){
            $order->items()->attach($item->id,['price'=>$item->price, 'quantity'=> $item->quantity]);
        }

        //empty cart

        \Cart::session(auth()->user()->id)->clear();

        //mail the user



        //redirect to thankyou 

        return "Thankyou for order";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}