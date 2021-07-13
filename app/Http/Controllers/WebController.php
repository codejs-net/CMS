<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
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
