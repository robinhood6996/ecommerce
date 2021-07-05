<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function PasswordChange()
    {
        return view('auth.changepassword');
    }

    public function PasswordUpdate(Request $request)
    {
       $password = Auth::user()->password;
       $old_pass = $request->oldpass;
       $new_pass = $request->password;
       $confirm = $request->password_confirmation;

       if(Hash::check($old_pass, $password)){
           if( $new_pass === $confirm){
               $user = User::find(Auth::id());
               $user->password = Hash::make($request->password);
               $user->save();
               Auth::logout();
               $notification = array(
                'message' => 'Password Change Successfully, Login again!',
                'alert-type' => 'success'
                 );
           return redirect()->route('login')->with($notification); 
           }else{
            $notification = array(
                'message' => 'New Password & Confirm Password doesn\'t matched!',
                'alert-type' => 'success'
                 );
           return redirect()->back()->with($notification);
           }
       }else{
        $notification = array(
            'message' => 'Old Password doesn\'t matched!',
            'alert-type' => 'success'
             );
       return redirect()->back()->with($notification);
       }
    }
   
}
