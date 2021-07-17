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
            }
        }

        return response()->json(['status' => "success",'data'=>$trans_data]);
    }

    public function publish_tranlation(Request $request)
    {
    // Read Files
    $jsonStrings_en = file_get_contents(base_path('resources/lang/en.json'));
    $jsonStrings_si = file_get_contents(base_path('resources/lang/si.json'));
    $jsonStrings_ta = file_get_contents(base_path('resources/lang/ta.json'));

    $data_en = json_decode($jsonStrings_en, true);
    $data_si = json_decode($jsonStrings_en, true);
    $data_ta = json_decode($jsonStrings_en, true);

    $transdata = translation::select('*')->get();

    foreach($transdata as $item)
    {
        //en.json
        $data_en[$item->key] = $item->string_en;
        //si.json
        $data_si[$item->key] = $item->string_si;
        //ta.json
        $data_ta[$item->key] = $item->string_ta;
    }

    $newJson_en = json_encode($data_en, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('resources/lang/en.json'), stripslashes($newJson_en));

    $newJson_si = json_encode($data_si, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('resources/lang/si.json'), stripslashes($newJson_si));

    $newJson_ta = json_encode($data_ta, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('resources/lang/ta.json'), stripslashes($newJson_ta));

    return redirect()->route('translation.index')
    ->with('success','Tranlation Published successfully');
    
    }

    public function import_translation(Request $request)
    {
        $jsonStrings_en = file_get_contents(base_path('resources/lang/en.json'));
        $jsonStrings_si = file_get_contents(base_path('resources/lang/si.json'));
        $jsonStrings_ta = file_get_contents(base_path('resources/lang/ta.json'));
    
        $data_en = json_decode($jsonStrings_en, true);
        $data_si = json_decode($jsonStrings_si, true);
        $data_ta = json_decode($jsonStrings_ta, true);

        translation::query()->truncate();

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
