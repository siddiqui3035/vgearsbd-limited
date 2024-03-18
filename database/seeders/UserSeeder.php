<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('asdf1234');
        $users =[
            [
                'role' => ROLE_SUPER_ADMIN,
                'first_name' => 'Suber Admin',
                'last_name' => 'Admin',
                'email' => 'superadmin@vgears.com',
                'password' => $password,
                'phone' => '01677273025',
                'whatsapp_number' => '01677273025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => ROLE_ADMIN,
                'first_name' => 'Office',
                'last_name' => 'Admin',
                'email' => 'admin@vgears.com',
                'password' => $password,
                'phone' => '01677273025',
                'whatsapp_number' => '01677273025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => ROLE_USER,
                'first_name' => 'General',
                'last_name' => 'User',
                'email' => 'user@vgears.com',
                'password' => $password,
                'phone' => '01677273025',
                'whatsapp_number' => '01677273025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
