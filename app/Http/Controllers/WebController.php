<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\navigation;

class WebController extends Controller
{
    public function index()
    {
        $menulist = navigation::tree();
        // dd($navdata[1]);
        return view('web.template.agency1.index',compact('menulist'));
    }

    public function about()
    {
        return view('web.pages.about.about');
    }
    public function blog_index()
    {
        return view('web.pages.blog.index');
    }
    public function blog_detail($id)
    {
        return view('web.pages.blog.blog_detail');
    }

}
