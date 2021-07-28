<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\navigation;
use App\Models\page;

class WebController extends Controller
{
    public function index()
    {
        $menulist = navigation::tree();
        // dd($navdata[1]);
        return view('web.template.index',compact('menulist'));
    }

    public function page($id)
    {
        $menulist = navigation::tree();
        $page_data = page::find($id);
        
        return view('web.page.index')
            ->with('menulist',$menulist)
            ->with('page_data',$page_data);
    }

    public function about()
    {
        $menulist = navigation::tree();
        return view('web.page.about_area')
        ->with('menulist',$menulist);
    }
    public function about_agency()
    {
        $menulist = navigation::tree();
        return view('web.page.about_agency')
        ->with('menulist',$menulist);
    }
    public function service()
    {
        $menulist = navigation::tree();
        return view('web.page.service')
        ->with('menulist',$menulist);
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
