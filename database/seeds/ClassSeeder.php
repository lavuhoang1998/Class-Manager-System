<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=3; $i++) {
            DB::table('classes')->insert([
                'grade_id'=> $i,
                'name'=> $i+9 . 'A',
            ]);
            DB::table('classes')->insert([
                'grade_id'=> $i,
                'name'=> $i+9 . 'B',
            ]);
            DB::table('classes')->insert([
                'grade_id'=> $i,
                'name'=> $i+9 . 'C',
            ]);
        };
    }
}
