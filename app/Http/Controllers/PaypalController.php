<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout()
    {
       $checkoutData = $this->checkoutData();  //function call

        //dd($checkoutData);
        $provider= new ExpressCheckout();
        $response= $provider->setExpressCheckout($checkoutData); 

        //dd($response);

        return \redirect($response['paypal_link']);
       
    }


    private function checkoutData()
    {
        $cart= \Cart::session(auth()->user()->id);

        $cartItems= array_map(function($item){
            return[
                'name'=> $item['name'],
                'price'=> $item['price'], 
                'qty'=> $item['quantity'],
            ];
        }, $cart->getContent()->toarray() );

        //dd($cartItems);

        $checkoutData=[
            'items'=>$cartItems,
            'return_url'=>route('paypal.success'),
            'cancel_url' =>route('paypal.cancel'),
            'invoice_id' =>uniqid(),
            'invoice_description' => 'Order Description',
            'total' => $cart->getTotal()
        ];

        return $checkoutData;
    }

    public function cancelPage()
    {
        dd('payment canceled');
    }



    public function getExpressCheckoutSuccess(Request $request)
    {

        $token= $request->get('token');
        $payerId= $request->get('PayerID');

        $checkoutData = $this->checkoutData();  //public function called

        $provider= new ExpressCheckout(); 

        $response= $provider->getExpressCheckoutDetails($token);

        if(\in_array(\strtoupper($response['ACK']), ['SUCCESS','SUCCESSWITHWARNING']))
        {
            $payment_status= $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
        }

        dd('payment successful'); 
    }

   
}
