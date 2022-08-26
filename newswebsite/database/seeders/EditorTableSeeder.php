<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editors = array(array('ed_id'=>'1' , 'ed_name'=>'Kamal','ed_ps'=>'456','ed_email'=>'editor@gmail.com'));
        DB::table('editors')->insert($editors);
    }
}
