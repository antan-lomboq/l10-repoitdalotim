<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [

            [
                'name'           => 'Admin',
                'email'          => 'admin@itdalotim.id',
                'password'       => bcrypt('12345678'),
                'role'       => '1',
                'remember_token' => null,
            ],
            [
                'name'           => 'User',
                'email'          => 'user@itdalotim.id',
                'password'       => bcrypt('12345678'),
                'role'       => '0',
                'remember_token' => null,
            ]
        ];
        User::insert($user);
    }
}
