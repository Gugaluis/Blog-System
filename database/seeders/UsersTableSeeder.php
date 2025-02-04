<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'admin' 
            ],
            [
                'name' => 'Normal User',
                'email' => 'normal@gmail.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'normal_user' 
            ],
            [
                'name' => 'Visitante',
                'email' => 'visitante@gmail.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'visitante' 
            ],
        ];

        DB::table('users')->insert($users);
    }
}
