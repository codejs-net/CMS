<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\navigation;


class NavigationController extends Controller
{
    public function index(Request $request)
    {
        $navdata = navigation::select('*')->get();

        return view('app.navigation.index',compact('navdata'));
    
    }
    public function add_menu_item(Request $request)
    {
        $perant=($request->perant)!='0'? ($request->perant.'-'):"";
        $key="Menu-".$perant.$request->item;
        $menu_data = array(
            'section'   =>  "Menu",
            'item'      =>  $request->item,
            'parent_id' =>  $request->perant | 0, 
            'key'       =>  $key, 
            'link'      =>  $request->link, 
        );
        navigation::create($menu_data);

        return response()->json(['status' => "success",'data'=>$menu_data]);
    
    }

    public function load_menu_item()
    {
        $data=navigation::all();
        return response()->json($data);
    }
}
