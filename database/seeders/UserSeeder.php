<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
            ([
            'name' => 'Broto suciptop',
            'email' => 'broto@admin.com',
            'password' => Hash::make('broto123'),
            'role' => 'admin',
            'gender' => 'male'
        ]),
        ([
            'name' => 'budiman suciptop',
            'email' => 'budiman@member.com',
            'password' => Hash::make('budiman123'),
            'role' => 'member',
            'gender' => 'male'
        ]),
        );

    }
}
