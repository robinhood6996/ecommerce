<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index($id, $product_name)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', 'categories.id')
            ->join('brands', 'products.brand_id', 'brands.id')
            ->join('subcategories', 'products.subcategory_id', 'subcategories.id')
            ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name', 'brands.brand_name')
            ->where('products.id', $id)->first();
        $color = $product->product_color;
        $product_color = explode(',', $color);

        $size = $product->product_size;
        $product_size = explode(',', $size);

        return view('pages.product', compact('product', 'product_color', 'product_size'));
    }

    public function AddCart(Request $request, $id)
    {
        $product = DB::table('products')->where('id', $id)->first();


        if ($product->discount_price == NULL) {
            $data = array();
            $data['id'] = $id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            Cart::add($data);
            $notification = array(
                'message' => 'Succefully product added to your cart',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $data = array();
            $data['id'] = $id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            Cart::add($data);
            $notification = array(
                'message' => 'Succefully product added to your cart',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
