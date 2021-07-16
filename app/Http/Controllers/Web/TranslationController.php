<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\translation;

class TranslationController extends Controller
{
    public function index(Request $request)
    {
        $transdata = translation::select('*')->get();
        // $transdata = translation::select('*')->paginate(20);
        return view('app.translation.index',compact('transdata'));
    
    }

    public function store(Request $request)
    {
        $trans_data=json_decode($request->get('transdata'));
        foreach($trans_data as $item)
        {
            $row=translation::find($item->id);
            if($row)
            {
                // $row->section=$item->section;
                // $row->key=$item->key;
                $row->string_en=$item->string_en;
                $row->string_si=$item->string_si;
                $row->string_ta=$item->string_ta;
                $row->save();
                error_log($item->string_si);
            }
        }

        return response()->json(['status' => "success",'data'=>$trans_data]);
    }

    public function update_tranlation(Request $request)
    {
    // Read Files
    $jsonStrings_en = file_get_contents(base_path('resources/lang/en.json'));
    $jsonStrings_si = file_get_contents(base_path('resources/lang/si.json'));
    $jsonStrings_ta = file_get_contents(base_path('resources/lang/ta.json'));

    $data_en = json_decode($jsonStrings_en, true);
    $data_si = json_decode($jsonStrings_en, true);
    $data_ta = json_decode($jsonStrings_en, true);


    dd($data["Slider-heading1"]);
    // Update Key
    $data['Slider-heading1'] = "Bulathkohupitiya Pradeshiya Sabha11";
    // Write File
    $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents(base_path('resources/lang/en.json'), stripslashes($newJsonString));
    // Get Key Value

    dd(__('Slider-heading1'));

        // return view('app.users.index',compact('userdata'));
    
    }

    public function import_translation(Request $request)
    {
        $jsonStrings_en = file_get_contents(base_path('resources/lang/en.json'));
        $jsonStrings_si = file_get_contents(base_path('resources/lang/si.json'));
        $jsonStrings_ta = file_get_contents(base_path('resources/lang/ta.json'));
    
        $data_en = json_decode($jsonStrings_en, true);
        $data_si = json_decode($jsonStrings_si, true);
        $data_ta = json_decode($jsonStrings_ta, true);

        // $tran= new translation;
        
        foreach($data_en as $key => $item)
        {
            $section=explode("-",$key);
            $string_en=$item;
            $string_si="";
            $string_ta="";
            
            if (array_key_exists($key,$data_si))
            { $string_si=$data_si[$key];}

            if (array_key_exists($key,$data_ta))
            { $string_ta=$data_ta[$key];}

            $import_data = array(
                'section'   =>  $section[0],
                'key'       =>  $key,
                'string_en' =>  $string_en, 
                'string_si' =>  $string_si, 
                'string_ta' =>  $string_ta, 
            );
            translation::create($import_data);
        }
        return redirect()->route('translation.index')
        ->with('success','Tranlation Strings Import successfully from Json Files');

    }
}
