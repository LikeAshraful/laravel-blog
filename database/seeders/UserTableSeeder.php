<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role_id' => 1,
            'password' => bcrypt('12345678'),
            'is_active' => 1
        ]);

        User::create([
            'name' => 'author',
            'email' => 'author@author.com',
            'role_id' => 2,
            'password' => bcrypt('12345678'),
            'is_active' => 1
        ]);
    }
}
