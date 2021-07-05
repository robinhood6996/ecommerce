<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class couponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
   
    public function coupons()
    {
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.coupons',compact('coupon'));
    }

    public function storeCoupon(Request $request)
    {
        $validatedData = $request->validate([
            'coupon' => 'required|unique:coupons',
            'discount' => 'required',
           
        ]);


        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;

        DB::table('coupons')->insert($data);
        $notification = array(
            'message' => 'Coupon Inserted successfully',
            'alert-type' => 'success'
             );
       return redirect()->route('coupons')->with($notification); 
    }

    public function editCoupon($id){

        $coupon = DB::table('coupons')->where('id',$id)->first();
        return view('admin.coupon.edit_coupon',compact('coupon'));
    }

    public function deleteCoupon($id)
    {
        DB::table('coupons')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Coupon Deleted successfully',
            'alert-type' => 'error'
             );
       return redirect()->route('coupons')->with($notification); 
    }

    public function updateCoupon(Request $request, $id){
        $validatedData = $request->validate([
            'coupon' => 'required',
            'discount' => 'required',
           
        ]);
    
        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;

        DB::table('coupons')->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Coupon Updated successfully',
            'alert-type' => 'success'
             );
       return redirect()->route('coupons')->with($notification); 

    }

    //Newsletters here
    public function Newsletters()
    {
        $newsletter = DB::table('newslaters')->get();
        return view('admin.coupon.newsletter',compact('newsletter'));
    }

    public function deletesub($id){
        DB::table('newslaters')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Email Deleted successfully',
            'alert-type' => 'error'
             );
       return redirect()->route('admin.newletters')->with($notification); 
    }
}
