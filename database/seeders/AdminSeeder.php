<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'phone' => '0812345678',
            'address' => 'Admin Address',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'status' => 1
        ]);
    }
}
