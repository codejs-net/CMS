<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\navigation;


class NavigationController extends Controller
{
    public function index(Request $request)
    {
        // $transdata = translation::select('*')->get();
        return view('app.navigation.index');
    
    }
}
