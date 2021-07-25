<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function AddCart($id)
    {
        $product = DB::table('products')->where('id', $id)->first();


        if ($product->discount_price == NULL) {
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = "";
            $data['options']['size'] = "";
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your cart']);
        } else {
            $data = array();
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = 1;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = "";
            $data['options']['size'] = "";
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your cart']);
        }
    }

    public function ShowCart()
    {
        $cart = Cart::Content();
        return view('pages.cart', compact('cart'));
    }


    public function Check()
    {
        $content = Cart::content();
        return response()->json($content);
    }

    public function UpdateCart(Request $request)
    {
        $rowId = $request->productId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        return redirect()->back();
    }

    public function Delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function ViewProduct($id)
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

        // return response()->json($product);
        return \Response::json(array(
            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,
        ));
    }

    public function InsertCart(Request $request)
    {
        $id = $request->product_id;
        $product = DB::table('products')->where('id', $id)->first();
        $data = array();
        if ($product->discount_price == NULL) {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;;
            $data['price'] = $product->selling_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            Cart::add($data);
            $notification = array(
                'messege' => 'Successfully Done',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $data['id'] = $product->id;
            $data['name'] = $product->product_name;
            $data['qty'] = $request->qty;;
            $data['price'] = $product->discount_price;
            $data['weight'] = 1;
            $data['options']['image'] = $product->image_one;
            $data['options']['color'] = $request->color;
            $data['options']['size'] = $request->size;
            Cart::add($data);
            $notification = array(
                'messege' => 'Successfully Done',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Checkout()
    {
        if (Auth::check()) {
            $cart = Cart::Content();
            return view('pages.checkout', compact('cart'));
        } else {
            $notification = array(
                'messege' => 'At first login your account',
                'alert-type' => 'success'
            );
            return redirect()->route('login')->with($notification);
        }
    }

    public function Wishlist()
    {
        $userID = Auth::id();
        $wishlist = DB::table('wishlists')->join('products', 'wishlists.product_id', 'products.id')
            ->select('products.*', 'wishlists.user_id')
            ->where('wishlists.user_id', $userID)
            ->get();
        return view('pages.wishlist', compact('wishlist'));
    }

    public function Coupon(Request $request)
    {
        $coupon = $request->coupon;
        $check = DB::table('coupons')->where('coupon', $coupon)->first();

        if ($check) {
            Session::put('coupon', [
                'name' => $check->coupon,
                'discount' => $check->discount,
                'balance' => Cart::subtotal() - $check->discount
            ]);
            $notification = array(
                'messege' => 'Coupon Applied',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Invalid Coupon',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function CouponRemove()
    {
        session::forget('coupon');
        return redirect()->back();
    }
}
