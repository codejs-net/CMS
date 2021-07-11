<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\setting;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Arr;
use DataTables;
use Session;
    
class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update','update_users','pw_reset']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function my_account()
    {
        
        $user_id=Auth::user()->id;
        $userdata = User::find($user_id);
        $userrole = $userdata->roles->pluck('name')->first();

        return view('users.myaccount',compact('userrole','userdata'));
    }

    public function update_my_account(Request $request)
    {
        $id=$request->user_id;
        $this->validate($request, [
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,

        ]);
    
        $user = User::find($id);
        $user->username=$request->username;
        $user->email=$request->email;
        $user->save();

        return redirect()->route('home')
                        ->with('success','User updated successfully');
    }


    public function index(Request $request)
    {
        $locale = session()->get('locale');
        $setting = setting::where('setting','locale_db')->first();
        if($setting->value=="0"){$lang="_".$locale;}
        else{$lang="_".$setting->value;}
        Session::put('db_locale', $lang);

        $userdata = User::select('*')->get();

        return view('users.index',compact('userdata'));
    
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_users()
    {
        $roles=Role::all();
        return view('users.create',compact('roles'));
    }
    
    public function store_users(Request $request)
    {
        // dd($request);
        $locale = session()->get('locale');
        $setting = setting::where('setting','locale_db')->first();
        if($setting->value=="0"){$lang="_".$locale;}
        else{$lang="_".$setting->value;}
        Session::put('db_locale', $lang);


        $_password="";
        $this->validate($request, [
            'username' => 'required|unique:users,username,',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required'
        ]);

        if($request->preset=="default")
        {
            $setting = setting::where('setting','default_password')->first();
            $_password=Hash::make($setting->value);
        }
        else if($request->preset=="mannual")
        {
            $this->validate($request, [
                'password' => 'required|same:confirm-password',
            ]);
            $_password=Hash::make($request->password);
        }

        $user= new User;
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->username=$request->username;
        $user->password=$_password;
        $user->save();

        $user->assignRole([$request->roles]);
       
        // send sms
        // $SoapController =new SoapController;
        // $mobile_no=$user->mobile;
        
        // $message_text="Code-JS CMS - User Account Detail"."\r\n"."Name : ".$user->fullname."\r\n"."User Name : ".$user->username."\r\n"."Email : ".$user->email."\r\n"."Password : ".$request->password."\r\n";

        // $setting_sms_send = setting::where('setting', 'sms_user_create')->first();
        // if ($setting_sms_send->value == "1") 
        // {
        //     if($SoapController->is_connected()==true)
        //     {$SoapController->multilang_msg_Send($mobile_no, $message_text);} 
        // } 
        //end sms
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_users($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_users($id)
    {
        $user = User::find($id);
        $userRole = $user->roles->pluck('id')->first();
        $roles=Role::all();
    
        return view('users.edit',compact('user','roles','userRole'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_users(Request $request)
    {
        $id=$request->user_id;
        $this->validate($request, [
            'username' => 'required|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            // 'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $user = User::find($id);
        $user->username=$request->username;
        $user->email=$request->email;
        $user->fullname=$request->fullname;
        $user->mobile=$request->mobile;
        $user->save();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole([$request->roles]);
     
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    // ----------------------------------------member user-----------------------------------------


    public function pw_reset(Request $request)
    {
        $id=$request->user_id;
        $user = User::find($id);

        if($request->preset=="default")
        {
            $setting = setting::where('setting','default_password')->first();
            $user->password=Hash::make($setting->value);

        }
        else if($request->preset=="mannual")
        {
            $this->validate($request, [
                'password' => 'same:confirm-password',
            ]);
            $user->password=Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('success','Password Reset successfully');
    }

    public function delete(Request $request)
    {
        User::find($request->id_delete)->delete();
        return redirect()->back()->with('success','User deleted successfully');
    }
}