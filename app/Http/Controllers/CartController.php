<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    public function AddCart($id)
    {
        $product = DB::table('products')->where('id',$id)->first();


        if($product->discount_price == NULL)
        {
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your cart']);

        }else{
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your cart']);
        }
    }


    public function Check()
    {
        $content = Cart::content();
        return response()->json($content);
    }
}
