<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin','verified']);
    }
  
    public function index(){
        if(Session::has('is_verified')){
            $key = Session::get('is_verified');
            if($key == true){
                $page_title = 'Admin Dashboard';
                $page_description = 'Admin Dashboard';
        
                return view('admin.pages.dashboard', compact('page_title', 'page_description'));
            }
        }
        $id = Auth::user()->id;
        $user = User::find($id);
        if($user->is_tfa_enabled == 1 ){
            Session::put('is_verified', false);
            if($user->pin == ''){

                $pin = rand(0,9). rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
                $user->pin = $pin;
                $user->save();
                $sid = env('TWILIO_SID');
                $token = env('TWILIO_TOKEN');
    
                $client = new Client($sid,$token);
                $client->messages->create('+12243238312',[
                    'from' => env('TWILIO_NUMBER'),
                    'body' => 'The code is '.$pin
                ]);
            }
            return view('auth.pin');
        }
        else{
            Session::put('is_verified', true);
            $page_title = 'Admin Dashboard';
            $page_description = 'Admin Dashboard';
    
            return view('admin.pages.dashboard', compact('page_title', 'page_description'));
        }
    }

    public function index2(Request $request){
        $request->validate([
            'pin'=> 'required|min:2|numeric'
        ]);
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $pin = $request->pin;
        if($pin == $user->pin){
            $user->pin = '';
            $user->save();
            Session::put('is_verified',true);
            return redirect('/admin');
        }else{
            return back()->with('error',"Wrong Pin");
        }

    }

    public function changeProfile(){
        $page_title = 'Change Profile';
        $page_description = 'Update Your Profile';
        $userId = Auth::user()->id;
        $user = User::find($userId);
        return view('admin.pages.change-profile', compact('page_title', 'page_description','user'));

    }
    public function changeProfileSubmit(Request $request){
        $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if($request->two_fa){
            $user->is_tfa_enabled = 1;
        }else{
            $user->is_tfa_enabled = 0;
        }
        $user->save();
        return redirect('/admin')->with('success',"Account Information changed successfully");
    }


    public function passwordRreset(){
        $page_title = 'Password Reset';
        $page_description = 'Reset Your Password';

        return view('admin.pages.password-reset', compact('page_title', 'page_description'));
    }

    public function passwordRresetSubmit(Request $request){
        $request->validate([
            'newPassword' => 'required|min:8'
        ]);

        $user = User::find(Auth::user()->id);
        $new = $request->newPassword;
        $user->password = Hash::make($new);
        $user->save();
        return redirect("/admin")->with('success','Password have been updated');

    }

    public function enable2Fa(){
        $page_title = 'Enable 2 Factor Authenetication';
        $page_description = 'Receive pin code on phone to proceed login ';
        $id = Auth::user()->id;
        $user = User::find($id);
        $is_2fa = $user->is_tfa_enabled;
        return view('admin.pages.enable-twofa',compact('page_title', 'page_description','is_2fa'));
    }
    public function enable2FaSubmit(Request $request){
        $enable = $request->enable;
        if($enable == 'on'){
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->is_tfa_enabled = 1;
            $user->save();
            return redirect('/admin/enable-2fa')->with('success',"2 factor authentiaction enabled successfully");
        }else{
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->is_tfa_enabled = 0;
            $user->save();
            return redirect('/admin/enable-2fa')->with('success',"2 factor authentiaction disabled successfully");
        }
    }


}
