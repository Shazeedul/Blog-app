<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'fname' => 'Syed',
                'lname' => 'Shazeedul',
                'email' => 'syedshazeedul@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'fname' => 'Mr.',
                'lname' => 'Nejam',
                'email' => 'syedshazeedul@yahoo.com',
                'password' => bcrypt('987654321'),
                'role' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
        ]);
    }
}
