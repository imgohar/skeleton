<?php
    
namespace App\Http\Controllers;
    
use DB;
use Hash;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\TeamRegisterNotification;
use Notification;

    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware(['auth','admin','verified']);
        $this->middleware('permission:team-list|team-create|team-edit|team-delete', ['only' => ['index','store']]);
        $this->middleware('permission:team-create', ['only' => ['create','store']]);
        $this->middleware('permission:team-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:team-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $page_title = 'All Team Members';
        $page_description = 'List of all team members';
        $users = User::all();
        return view('users.index', compact('page_title', 'page_description','users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create Team Member';
        $page_description = 'Create a new team members';
        $roles = Role::pluck('name','name')->all();
        return view('users.create', compact('page_title', 'page_description','roles'));
        
        // return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:8',
            'phone' => 'required',
            'roles' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'email_verified_at'  => '2021-03-21 05:45:01',
        ];
        // Notification::send($request->email,new TeamRegisterNotification($data));
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input)->assignRole($request->input('roles'))->notify(new TeamRegisterNotification($data));
        // $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id);
        // return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Team Member';
        $page_description = 'edit a team members';
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit', compact('page_title', 'page_description','user','roles','userRole'));
    
        // return view('users.edit',compact('user','roles','userRole'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}