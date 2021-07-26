<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $pages= [

            ['page'=>'Home','page_type'=>'static','page_status'=>'1','link'=>'home'],
            ['page'=>'About Agency','page_type'=>'static','page_status'=>'1','link'=>'about_agency'],
            ['page'=>'About Area','page_type'=>'static','page_status'=>'1','link'=>'about_area'],
            ['page'=>'About History','page_type'=>'static','page_status'=>'1','link'=>'about_history'],

            ['page'=>'Services','page_type'=>'static','page_status'=>'1','link'=>'service'],

            ['page'=>'Needs','page_type'=>'static','page_status'=>'1','link'=>'needs'],
            ['page'=>'News & Updates','page_type'=>'static','page_status'=>'1','link'=>'news'],
            ['page'=>'Projects','page_type'=>'static','page_status'=>'1','link'=>'projects'],

            ['page'=>'Downloads','page_type'=>'static','page_status'=>'1','link'=>'download'],
            ['page'=>'Applications','page_type'=>'static','page_status'=>'1','link'=>'application'],
            ['page'=>'Budget Reports','page_type'=>'static','page_status'=>'1','link'=>'budget_report'],
            ['page'=>'Sabha Wartha','page_type'=>'static','page_status'=>'1','link'=>'saba_wartha'],
            ['page'=>'Final Account','page_type'=>'static','page_status'=>'1','link'=>'final_account'],

            ['page'=>'Information','page_type'=>'static','page_status'=>'1','link'=>'information'],
            ['page'=>'Gallery','page_type'=>'static','page_status'=>'1','link'=>'gallery'],
            ['page'=>'Contact ','page_type'=>'static','page_status'=>'1','link'=>'contact'],

            
        ];
        // Permission::create([$rows_Permission]);
        $insert= DB::table('pages')->insert($pages);
    }
}
