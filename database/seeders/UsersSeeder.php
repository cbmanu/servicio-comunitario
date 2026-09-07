<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'ZAMBRANO   CH  ROOSSVELT',
            'email'=>'zambrano.ch.roosvelt@gmail.com',
            'cedula'=>'42048531',
            'password'=>bcrypt('password'),
        ]);
    }
}