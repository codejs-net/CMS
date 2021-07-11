<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $rows_Permission= [

            ['name'=>'user-list','category'=>'User'],
            ['name'=>'user-create','category'=>'User'],
            ['name'=>'user-edit','category'=>'User'],
            ['name'=>'user-delete','category'=>'User'],
            
            ['name'=>'role-list','category'=>'Role'],
            ['name'=>'role-create','category'=>'Role'],
            ['name'=>'role-edit','category'=>'Role'],
            ['name'=>'role-delete','category'=>'Role'],

          


            ['name'=>'activity-log','category'=>'Activity log'],


            ['name'=>'dashboard','category'=>'Dashboard'],

            ['name'=>'backup','category'=>'backup'],
            ['name'=>'restore','category'=>'backup'],
            
        ];
        // Permission::create([$rows_Permission]);
        $insert= DB::table('Permissions')->insert($rows_Permission);
    }
}
