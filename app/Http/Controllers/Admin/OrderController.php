<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function NewOrders()
    {
        $orders = DB::table('orders')->where('status', 0)->get();
        return view('admin.order.pending', compact('orders'));
    }

    public function ViewOrder($id)
    {
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', 'users.id')
            ->select('users.name', 'users.phone', 'orders.*')
            ->where('orders.id', $id)
            ->first();

        $shipping = DB::table('shipping')->where('order_id', $id)->first();

        $details = DB::table('order_details')
            ->join('products', 'order_details.product_id', 'products.id')
            ->select('products.product_code', 'products.image_one', 'order_details.*')
            ->where('order_details.order_id', $id)->get();

        return view('admin.order.view', compact('order', 'shipping', 'details'));
    }

    public function PaymentAccept($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Payment Selected For Processing',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.neworders')->with($notification);
    }

    public function PaymentCancel($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 4]);
        $notification = array(
            'message' => 'Order Cancelled',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.neworders')->with($notification);
    }

    public function PaidOrders()
    {
        $paid_orders = DB::table('orders')->where('status', 1)->get();
        return view('admin.order.payment_completed', compact('paid_orders'));
    }
    public function DeliveryProcessing($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Order Selected For Processing',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.paid.orders')->with($notification);
    }

    public function ProcessingOrders()
    {
        $processing_orders = DB::table('orders')->where('status', 2)->get();
        return view('admin.order.processing', compact('processing_orders'));
    }
    public function DeliveryDone($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 3]);
        $notification = array(
            'message' => 'Order Succesfully Delivered',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.delivered.orders')->with($notification);
    }
    public function DeliveredOrders()
    {
        $delivered_orders = DB::table('orders')->where('status', 3)->get();
        return view('admin.order.delivered', compact('delivered_orders'));
    }

    public function CancelOrders()
    {
        $canceled_orders = DB::table('orders')->where('status', 4)->get();
        return view('admin.order.cancel', compact('canceled_orders'));
    }
}
