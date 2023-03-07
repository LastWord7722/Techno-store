<?php

namespace App\Http\Controllers\PayPal;

use App\Http\Controllers\Controller;
use App\Models\Oreder;
use App\Models\Product;
use Illuminate\Http\Request;

use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PayPalController extends Controller
{
    public function createOrder()
    {
        return view('paypal.index');
    }

    public function basketProcessPayPal(){
        $orderId = session('orderId');
        $order = Oreder::find($orderId);
        $totalPrice = 0;

        foreach ($order->products as $product){
            $priceProduct = $product->pivot->quantity * $product->price;
            $totalPrice += $priceProduct;
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('processSuccess',),
                "cancel_url" => route('processCancel'),
            ],
            "purchase_units" => [
                '0' => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $totalPrice
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createOrder')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createOrder')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function processPaypal(Request $request, Product $product)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('processSuccess',), // роуты успеха и неудачной итирации
                "cancel_url" => route('processCancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [// значения в форме отправке, валюта и её значения
                        "currency_code" => "USD", // я думаю, сюда значения из сущности $product по принципу композиции
                        "value" => $product->price
                    ]
                ]
            ]
        ]);

        // нужно поместить в трейт
        if (isset($response['id']) && $response['id'] != null) {

            foreach ($response['links'] as $links) { //я dd response и не совсем понял зачем этот перебор ссылок
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('createOrder')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('createOrder')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }


    public function processSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

// нужно поместить в трейт
        if (isset($response['status']) && $response['status'] == 'COMPLETED') { // при условии что заказ существует и статус успешный

            return redirect()
                ->route('createOrder')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('createOrder')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }

    }

    public function processCancel(Request $request)
    {
        return redirect()
            ->route('createOrder')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

}