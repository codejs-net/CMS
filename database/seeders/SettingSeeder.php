<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mul_rows_settings= [
            
        [  
        'setting'=>'locale_db',
        'category'=>'1',
        'value'=>'0',
        'detail'=>'db details show according to locale'
        ],
        [  
        'setting'=>'locale',
        'category'=>'1',
        'value'=>'si',
        'detail'=>'display Language'
        ],
       
        [  
        'setting'=>'default_password',
        'category'=>'3',
        'value'=>'code-js',
        'detail'=>'Default Password For user Account'
        ],
       
        [  
        'setting'=>'default_theme',
        'category'=>'6',
        'value'=>'js-blue-dark',
        'detail'=>'Defalut Active Theme'
        ],
       
        [  
        'setting'=>'email_backup',
        'category'=>'8',
        'value'=>'1',
        'detail'=>'Send backup zip file with email on create backup'
        ]
       
    ];
    $insert= DB::table('settings')->insert($mul_rows_settings);

    }
}
