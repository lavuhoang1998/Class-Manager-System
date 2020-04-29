<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=9; $i++) {
                DB::table('teachers')->insert([
                    'class_id' => $i,
                    'name' => 'Nguyen Thi '.$i,
                    'email' => 'Nguyen Thi A@gmail.com',
                    'date_of_birth' => now(),
                    'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                    'avatar' => 'img/avt1.png',
                ]);
            };
    }
}
