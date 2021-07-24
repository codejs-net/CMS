<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $page_data = page::select('*')->get();
        // $transdata = translation::select('*')->paginate(20);
        return view('app.pages.index',compact('page_data'));
    
    }

    public function create(Request $request)
    {
        return view('app.pages.create');
    }

    public function store(Request $request)
    {
        
    }
}
