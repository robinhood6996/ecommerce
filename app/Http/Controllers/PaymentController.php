<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PDO;
use Stripe;

class PaymentController extends Controller
{
    public function PaymentStep()
    {
        $cart = Cart::content();
        return view('pages.payment', compact('cart'));
    }

    public function MakePayment(Request $request)
    {

        $data = array();
        $data['name']    = $request->name;
        $data['phone']   = $request->phone;
        $data['email']   = $request->email;
        $data['address']   = $request->address;
        $data['city']    = $request->city;
        $data['payment'] = $request->payment;

        if ($request->payment == 'stripe') {
            //Redirect to stripe page
            return view('pages.payment.stripe', compact('data'));
        } elseif ($request->payment == 'paypal') {
            //Redirect to paypal page
        } elseif ($request->payment == 'ideal') {
            //Redirect to Ideal page
        } else {
            //Cashon Deliver
        }
    }


    public function StripeCharge(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51JEUoUL1oLmFID3VeJM28pJ41mtBF2T5D2K8hnxmZWvQUZIhpU7xje2WKegSSrbBIzMK0GfJ0PAFU4vGgV0qRuTq00b8ZfS87E');
        $charge = Stripe\Charge::create([
            "amount" => $request->total * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment of Product Selling to customer : " . Auth::user(),
            "metadata"  => ['orderid' => uniqid()],
        ]);

        // Insert Orders Table
        $data = array();
        $data['user_id'] = AUth::id();
        $data['payment_type'] = $request->payment_type;
        $data['payment_id'] = $charge->payment_method;
        $data['paying_ammount'] = $charge->ammount;
        $data['bln_transaction'] =  $charge->balance_transaction;
        $data['stripe_order_id'] =  $charge->metadata->orderid;
        $data['shipping'] = $request->shipping;
        $data['vat']  = $request->vat;
        $data['total'] = $request->total;
        if (Session::has('coupon')) {
            $data['subtotal'] = Session::get('coupon')['balance'];
        } else {
            $data['subtotal'] = Cart::Subtotal();
        }
        $data['status'] = 0;
        $data['date'] = date('d-m-y');
        $data['month'] = date('M');
        $data['year'] = date('Y');
        $order_id = DB::table('orders')->insertGetId($data);

        //  Insert Shipping Details
        $shipping = array();
        $shipping['order_id'] = $order_id;
        $shipping['ship_name'] = $request->ship_name;
        $shipping['ship_email'] = $request->ship_email;
        $shipping['ship_phone'] = $request->ship_phone;
        $shipping['ship_address'] = $request->ship_address;
        $shipping['ship_city'] = $request->ship_city;
        DB::table('shipping')->insert($shipping);

        //Insert Into Order_details Table----------

        $content = Cart::content();

        $details = array();
        foreach ($content as $row) {
            $details['order_id'] = $order_id;
            $details['product_id'] = $row->id;
            $details['product_name'] = $row->name;
            $details['color'] = $row->options->color;
            $details['size'] = $row->options->size;
            $details['quantity'] = $row->options->qty;
            $details['unit_price'] = $row->price;
            $details['total_price'] = $row->price * $row->qty;
            DB::table('order_details')->insert($details);
        }
        Cart::destroy();
        if (Session::has('coupon')) {
            Session::forget('couponm');
        }
        $notification = array(
            'messege' => 'Successfully placed an order',
            'alert-type' => 'success'
        );
        return Redirect()->to('/')->with($notification);
    }

    public function afterpayment()
    {
        return redirect()->route('/');
    }
}
