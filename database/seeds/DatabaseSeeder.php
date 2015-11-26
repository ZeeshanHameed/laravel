<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parent1')->insert([
            'parent_name' => "Father name",
        ]);
        DB::table('mother')->insert([
            'mother_name' => "Mother name",
        ]);
        DB::table('son')->insert([
            'name' => "Son name",
            'parent1_id' => 1,
            'mother_id' => 1,
        ]);
        DB::table('grand_daughter')->insert([
            'grand_daughter_name' => "Grand Daughter name",
            'son_id' => 1,
        ]);
        DB::table('grand_son')->insert([
            'grand_son_name' => "Grand Son name",
            'son_id' => 1,
        ]);       
    }     
}
