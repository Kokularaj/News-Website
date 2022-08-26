<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = array(array('ad_id'=>'1' , 'ad_name'=>'Aswin','ad_ps'=>'123','ad_email'=>'admin@gmail.com'));
        DB::table('admins')->insert($admins);
    }
}
