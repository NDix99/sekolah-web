<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            // Jika ada kolom tambahan seperti role, bisa ditambahkan di sini
            // 'role' => 'admin',
        ]);

        // Opsional: Tambahkan user test lainnya
        User::create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => bcrypt('user123'),
            // 'role' => 'user',
        ]);
    }
}
