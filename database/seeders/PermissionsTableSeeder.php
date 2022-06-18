<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'test_create',
            ],
            [
                'id'    => 18,
                'title' => 'test_edit',
            ],
            [
                'id'    => 19,
                'title' => 'test_show',
            ],
            [
                'id'    => 20,
                'title' => 'test_delete',
            ],
            [
                'id'    => 21,
                'title' => 'test_access',
            ],
            [
                'id'    => 22,
                'title' => 'client_create',
            ],
            [
                'id'    => 23,
                'title' => 'client_edit',
            ],
            [
                'id'    => 24,
                'title' => 'client_show',
            ],
            [
                'id'    => 25,
                'title' => 'client_delete',
            ],
            [
                'id'    => 26,
                'title' => 'client_access',
            ],
            [
                'id'    => 27,
                'title' => 'appointment_create',
            ],
            [
                'id'    => 28,
                'title' => 'appointment_edit',
            ],
            [
                'id'    => 29,
                'title' => 'appointment_show',
            ],
            [
                'id'    => 30,
                'title' => 'appointment_delete',
            ],
            [
                'id'    => 31,
                'title' => 'appointment_access',
            ],
            [
                'id'    => 32,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 33,
                'title' => 'resultat_access',
            ],
            [
                'id'    => 34,
                'title' => 'resultat_edit',
            ],
            [
                'id'    => 35,
                'title' => 'resultat_create',
            ],
            [
                'id'    => 36,
                'title' => 'resultat_delete',
            ],
            [
                'id'    => 37,
                'title' => 'resultat_show',
            ],
        ]);
    }
}
