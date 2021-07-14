<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\theme;
use App\Models\setting;
use Carbon\Carbon;
use Artisan;
use system;
use Auth;


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
        $user = session()->get('user');
        // dd($user->username);
        return view('app.home.index');

    }

    
    public function backup_db()
    {
        // Artisan::call('backup:run --only-db');
       $backup= Artisan::call('backup:run',['--only-db' => true]);
        return redirect()->back()->with('success','DB Dump created successfully.');
    }

}
