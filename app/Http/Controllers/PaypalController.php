<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
       $checkoutData = $this->checkoutData($orderId);  //function call

        //dd($checkoutData);
        $provider= new ExpressCheckout();
        $response= $provider->setExpressCheckout($checkoutData); 

        //dd($response);

        return \redirect($response['paypal_link']);
       
    }


    private function checkoutData($orderId)
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
            'return_url'=>route('paypal.success',$orderId),
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



    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {

        $token= $request->get('token');
        $payerId= $request->get('PayerID');

        $checkoutData = $this->checkoutData($orderId);  //public function called

        $provider= new ExpressCheckout(); 

        $response= $provider->getExpressCheckoutDetails($token);

        if(\in_array(\strtoupper($response['ACK']), ['SUCCESS','SUCCESSWITHWARNING']))
        {
            $payment_status= $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(\in_array($status,['Completed','Processed']))
            {
                $order= Order::find($orderId);

                $order->is_paid=1;
                $order->save();

                //send receipt mail
                Mail::to($order->user->email)->send(new OrderPlaced($order));

                 //empty cart 
                \Cart::session(auth()->user()->id)->clear();

                return redirect()->route('home')->withMessage('Payment Successful');
            }
        }

        return redirect()->route('home ')->withError('Payment Unsuccessful!!');

        dd('payment successful'); 
    }

   
}
