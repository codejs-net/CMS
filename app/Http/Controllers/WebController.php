<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\navigation;

class WebController extends Controller
{
    public function index()
    {
       
        $navdata = navigation::select('*')->get();
        $menudata_list=array();

        foreach($navdata as $row)
        {
            if($row->parent_id==0)
            {
                $menudata=array();
                $subdata_list=array();
                foreach($navdata as $sub)
                {
                    $subdata=array();
                    if($row->id==$sub->parent_id)
                    {
                        $subdata['id']=$sub->id;
                        $subdata['item']=$sub->item;
                        $subdata['key']=$sub->key;
                        $subdata['link']=$sub->link;
                        $subdata['parent_id']=$sub->parent_id;
    
                        array_push($subdata_list,$subdata);
                    }
                }
    
                $menudata['id']=$row->id;
                $menudata['item']=$row->item;
                $menudata['key']=$row->key;
                $menudata['link']=$row->link;
                $menudata['parent_id']=$row->parent_id;
                $menudata['submenu']=$subdata_list;
    
                array_push($menudata_list,$menudata);
            }
        }
        // $jsonmenu = json_encode($menudata_list,true);
        // dd($menudata_list);
        return view('web.template.agency1.index',compact('menudata_list'));
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
