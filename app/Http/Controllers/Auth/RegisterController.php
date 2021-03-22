<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'id1' => ['mimes:jpeg,png,jpg','max:1999'],
            'id2' => ['mimes:jpeg,png,jpg','max:1999']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
         /********************************** 
        // ALSO RUN PHP ARTISAN STORAGE:LINK
        **********************************/
        $request = request();
        if ($request->file('id1') || $request->file('id2')) {
        // GET FILE NAME WITH EXTENSION
        $fileNameWithExtension1 = $request->file('id1')->getClientOriginalName();
        $fileNameWithExtension2 = $request->file('id2')->getClientOriginalName();

        // GET JUST THE FILE NAME
        $fileName1 = pathinfo($fileNameWithExtension1,PATHINFO_FILENAME);
        $fileName2 = pathinfo($fileNameWithExtension2,PATHINFO_FILENAME);

        // GRT JUST THE EXTENSION WITHOUT DOT
        $extension1 = $request->file("id1")->getClientOriginalExtension();
        $extension2 = $request->file("id2")->getClientOriginalExtension();
        
        // CREATE NEW FILE NAME
        $fileNameToStore1 = $fileName1 . '_front' . time(). '.' . $extension1;
        $fileNameToStore2 = $fileName2 . '_back' . time(). '.' . $extension2;
        
        // UPLOAD IMAGE
        $path1 = $request->file('id1')->storeAs('public/id-cards/',$fileNameToStore1);
        $path2 = $request->file('id2')->storeAs('public/id-cards/',$fileNameToStore2);
        
        }else{
            $fileNameToStore1 = '';
            $fileNameToStore2 = '';
        }

        
        
        return User::create([
            
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'country' => $data['country'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address_1' => $data['address_1'],
            'address_2' => $data['address_2'],
            'post_code' => $data['post_code'],
            'city' => $data['city'],
            'state' => $data['state'],
            'business_name' => $data['bname'],
            'business_tax_id' => $data['tid'],
            'business_contact_number' => $data['bNumber'],
            'nic' => $data['nic'],
            'b_address_1' => $data['b_address_1'],
            'b_address_2' => $data['b_address_2'],
            'dba' => $data['dba'],
            'id1' => $fileNameToStore1,
            'id2' => $fileNameToStore2,
            'password' => Hash::make($data['password']),
        ]);
    }
}
