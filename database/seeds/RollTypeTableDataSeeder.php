<?php

use Illuminate\Database\Seeder;

class RollTypeTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rolltype')->insert([
            'roll_name' => 'admin',
            
        ]);

        DB::table('rolltype')->insert([
            'roll_name' => 'subadmin',
            
        ]);

        DB::table('rolltype')->insert([
            'roll_name' => 'frontuser',
            
        ]);
    }
}
