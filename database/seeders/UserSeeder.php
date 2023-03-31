<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run():void
    {
        User::create([
            'name'=>'Laura',
            'email'=>'Lau32@gmail.com',
            'password'=>bcrypt('123d')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Juan',
            'email'=>'Juancho16@gmail.com',
            'password'=>bcrypt('123h1')
        ])->assignRole('User');

        User::create([
            'name'=>'Ramirez',
            'email'=>'RFT@gmail.com',
            'password'=>bcrypt('123p23')
        ])->assignRole('Admin');


    }
}
