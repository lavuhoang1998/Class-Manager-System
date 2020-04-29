<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=9; $i++) {
            for ($j='A'; $j<='Y'; $j++) {
                DB::table('students')->insert([
                    'class_id' => $i,
                    'name' => 'Nguyen Van '.$j.$i,
                    'email' => 'Nguyen Van '.$j.$i.'@gmail.com',
                    'date_of_birth' => now(),
                    'about_me' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                    'avatar' => 'img/avt.jpg',
                ]);
            };
        };
    }
}
