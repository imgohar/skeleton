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
                $page_title = 'Dashboard';
                $page_description = 'Some description for the page';
        
                return view('pages.dashboard', compact('page_title', 'page_description'));
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
            $page_title = 'Dashboard';
            $page_description = 'Some description for the page';
    
            return view('admin.pages.dashboard', compact('page_title', 'page_description'));
        }
    }
}
