<?php

namespace Database\Seeders;

use App\Models\Outlet;
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
        $outlet = Outlet::create([
            'code' => 'O-00001',
            'name' => 'Outlet',
            'address' => 'Outlet Address',
            'telp_1' => '031123456',
            'telp_2' => '031123456',
            'fax' => '031123456',
            'status' => 1,
        ]);

        User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'phone' => '0812345678',
            'address' => 'Admin Address',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'status' => 1,
            'outlet_id' => 1
        ]);

        $outlet->update([
            'modified_by' => 1
        ]);
    }
}
