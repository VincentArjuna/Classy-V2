<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'name' => 'Abdul',
            'birth_date' => '1995-5-27',
            'address' => 'Jl. Indah 1',
            'id_number' => '123456789',
            'id_type' => 'sim',
            'phone' => '08123456789',
            'email' => 'abdul123@mail.com',
            'modified_by' => 1
        ]);

        Pelanggan::create([
            'name' => 'Kevin',
            'birth_date' => '1981-12-3',
            'address' => 'Jl. Indah 2',
            'id_number' => '123456789',
            'id_type' => 'ktp',
            'phone' => '08123456789',
            'email' => 'kevin123@mail.com',
            'modified_by' => 1
        ]);

        Pelanggan::create([
            'name' => 'Javar',
            'birth_date' => '1989-6-15',
            'address' => 'Jl. Indah 3',
            'id_number' => '123456789',
            'id_type' => 'ktp',
            'phone' => '08123456789',
            'email' => 'javar123@mail.com',
            'modified_by' => 1
        ]);

        Pelanggan::create([
            'name' => 'Clyde',
            'birth_date' => '1993-2-20',
            'address' => 'Jl. Indah 4',
            'id_number' => '123456789',
            'id_type' => 'sim',
            'phone' => '08123456789',
            'email' => 'clyde123@mail.com',
            'modified_by' => 1
        ]);
    }
}
