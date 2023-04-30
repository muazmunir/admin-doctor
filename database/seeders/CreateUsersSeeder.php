<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@email.com',
               'role'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'doctor',
               'email'=>'doctor@email.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Paient',
               'email'=>'patient@email.com',
               'role'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
