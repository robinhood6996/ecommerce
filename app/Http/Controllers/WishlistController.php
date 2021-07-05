<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function AddWishlist($id)
    {
        $userid = Auth::id();
        $check = DB::table('wishlists')->where('user_id',$userid)->where('product_id',$id)->first();
        
         $data = array();
         $data['user_id'] = $userid;
         $data['product_id'] = $id; 

        if(Auth::check()){
            if($check){
                return \Response::json(['error' => 'This product already in wishlist!']);
           
            }else{
                DB::table('wishlists')->insert($data);
                return \Response::json(['success' => 'Product added on wishlist']);
           
            }
        }else{
            return \Response::json(['error' => 'Login first to add on wishlisht!']);
        }
    }
}
