<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $users = [
            [
                'id'                => 1,
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('password'),
                'remember_token'    => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id'                => 2,
                'name'              => 'User',
                'email'             => 'user@user.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('password'),
                'remember_token'    => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);

    }
}
