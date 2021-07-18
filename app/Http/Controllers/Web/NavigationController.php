<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\navigation;


class NavigationController extends Controller
{
    public function index(Request $request)
    {
        // $navdata = navigation::select('*')->get();
        return view('app.navigation.index');
    
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

    public function save_menu(Request $request)
    {
        $array_menu = json_decode($request->menu, true);
        // dd($array_menu);
        if (empty($array_menu)) {
            return redirect()->route('navigations.index')->with('info','Nothing to Change');
        }
        navigation::query()->truncate();
        $this->updateMenu($array_menu);
        return redirect()->route('navigations.index')->with('success','Menu Saved successfully');
    }

    function updateMenu($menu,$parent = 0)
    {
        foreach ($menu as $value) {
            
            $item = $value['label'];
            $link = (empty($value['url'])) ? '#' : $value['url'];

            $key_parent=($parent)!= 0 ? ($parent.'.'):"";
            $key="Menu-".$key_parent.$item;
            
            $menu_data = array(
                'section'   =>  "Menu",
                'item'      =>  $item,
                'parent_id' =>  $parent, 
                'key'       =>  $key, 
                'link'      =>  $link, 
            );
            $insert = navigation::create($menu_data);

            if (array_key_exists('children', $value))
                $this->updateMenu($value['children'],$insert->id);
        }
    }

}
