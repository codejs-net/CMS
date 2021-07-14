<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

use App\Models\setting;

use Session;

use App\Models\theme;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    // public function showLoginForm()
    // {
    //     $locale = session()->get('locale');
    //     if(empty($locale))
    //     {
    //         Session::put('locale', 'si');
    //     }
    //     return redirect()->route('lmslogin.index');
        
    // }

    public function index()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            
            $loguser = User::where('id', Auth::user()->id)->first();
          
            // dd($loguser);
            Session::put('user', $loguser);
            //-----------theme--------------------------------
            $default_theme = setting::where('setting','default_theme')->first();
            Session::put('theme', $default_theme->value);
            
            //----------end theme-----------------------------
            
            // activity()
            // ->causedBy($userModel)
            // ->performedOn($someContentModel)
            // ->withProperties(['key' => 'value'])
            // ->createdAt(now()->subDays(10))
            // ->log('edited');

            // activity()->log('login');
            return redirect()->route('cms-admin');

        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
