<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1, // Mengacu pada Administrator
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'), // Password di-enkripsi
            ],
            [
                'user_id' => 2,
                'level_id' => 2, // Mengacu pada Manager
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 3,
                'level_id' => 3, // Mengacu pada Staff/Kasir
                'username' => 'staff',
                'nama' => 'Staff Pelayan',
                'password' => Hash::make('12345'),
            ],
        ];
        DB::table('m_user')->insert($data);
    }
}