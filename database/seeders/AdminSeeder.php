<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin Blog',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin12345')
        ]);

        $admin->assignRole('admin');
    }
}
