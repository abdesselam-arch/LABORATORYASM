<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                //'remember_token'     => null,
                //'verified'           => 1,
                //'verified_at'        => '2022-05-02 11:59:23',
                //'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}