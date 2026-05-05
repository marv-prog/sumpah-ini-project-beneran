<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat akun khusus User/Customer
            User::create([
            'name' => 'Aira',
            'email' => 'aira@gmail.com', // Pastikan emailnya sama persis
            'password' => Hash::make('password123'), // Password yang akan diketik nanti
            // tambahkan field lain jika sudah kamu migrasi
        ]);
    }
}