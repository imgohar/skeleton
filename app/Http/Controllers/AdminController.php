<?php

namespace App\Http\Controllers;

use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
  
    public function index(){
        $page_title = 'Admin Dashboard';
        $page_description = 'Admin Dashboard';

        return view('pages.dashboard', compact('page_title', 'page_description'));
    }
       
    public function changeProfile(){
        $page_title = 'Change Profile';
        $page_description = 'Update Your Profile';
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('pages.change-profile', compact('page_title', 'page_description','user'));

    }
    public function changeProfileSubmit(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins,username,'.Auth::user()->id.',',
            'phone' => 'required',
            'email' => 'required|unique:admins,email,'.Auth::user()->id.','
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        
        $user->save();
        return redirect('/')->with('success',"Account Information changed successfully");
    }


    public function passwordRreset(){
        $page_title = 'Password Reset';
        $page_description = 'Reset Your Password';

        return view('pages.password-reset', compact('page_title', 'page_description'));
    }

    public function passwordRresetSubmit(Request $request){
        $request->validate([
            'newPassword' => 'required|min:8'
        ]);

        $user = User::find(Auth::user()->id);
        $new = $request->newPassword;
        $user->password = Hash::make($new);
        $user->save();
        return redirect("/")->with('success','Password have been updated');

    }

    
   



}
