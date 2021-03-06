<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\navigation;
use App\Models\page;


class NavigationController extends Controller
{
    public function index(Request $request)
    {
        $pagedata = page::select('*')->get();
        return view('app.navigation.index')
            ->with('pagedata',$pagedata);
    
    }
    public function add_menu_item_custom(Request $request)
    {
        $key_parent="";
        if(!$request->perant=='0')
        {
            $prow = navigation::where('id', $request->perant)->first();
            $key_parent=$prow->item.'.';
        }
        $key="Menu-".$key_parent.$request->item;
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
    public function add_menu_item_page(Request $request)
    {
        $page = page::find($request->page);
        $key_parent="";
        if(!$request->perant=='0')
        {
            $prow = navigation::where('id', $request->perant)->first();
            $key_parent=$prow->item.'.';
        }
        $key="Menu-".$key_parent.$page->page;
        $menu_data = array(
            'section'   =>  "Menu",
            'item'      =>  $page->page,
            'parent_id' =>  $request->perant | 0, 
            'key'       =>  $key, 
            'link'      =>  $page->link, 
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
        // dd($menu);
        foreach ($menu as $value) {
            
            $item = $value['label'];
            $link = (empty($value['url'])) ? '#' : $value['url'];

            $key_parent="";
            if(!$parent==0)
            {
                $prow = navigation::where('id', $parent)->first();
                $key_parent=$prow->item.'.';
            }
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
