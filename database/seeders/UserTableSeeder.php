<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@portlu.com',
                'password'=> Hash::make('admin@portlu.com'),
                'role'=>'admin',
                'status'=>'active',
            ],
            // user
            [
                'name'=>'oussama',
                'username'=>'oussama',
                'email'=>'oussama12as@gmail.com',
                'password'=> Hash::make('oussama12'),
                'role'=>'user',
                'status'=>'active',
            ]
        ]);
    }
}
