<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontCrontroller extends Controller
{
  
    public function StoreNewsletter(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:newslaters',
        ]);
        $data =array();
        $data['email']= $request->email;
        DB::table('newslaters')->insert($data);
        $notification = array(
            'message' => 'Thanks for subscribe',
            'alert-type' => 'success'
             );
       return redirect()->back()->with($notification); 
    }
}
