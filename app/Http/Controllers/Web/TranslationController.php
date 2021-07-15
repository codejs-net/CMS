<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index(Request $request)
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

    public function import_json(Request $request)
    {
        $jsonStrings_en = file_get_contents(base_path('resources/lang/en.json'));
        $jsonStrings_si = file_get_contents(base_path('resources/lang/si.json'));
        $jsonStrings_ta = file_get_contents(base_path('resources/lang/ta.json'));
    
        $data_en = json_decode($jsonStrings_en, true);
        $data_si = json_decode($jsonStrings_en, true);
        $data_ta = json_decode($jsonStrings_en, true);

        

    }
}
