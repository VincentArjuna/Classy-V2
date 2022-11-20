<?php

namespace Database\Seeders;

use App\Models\Parfum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parfum::create([
            'name' => 'Lily Sweet',
            'description' => 'Aroma Lily Manis',
            'type' => 'Medium',
            'modified_by' => 1
        ]);

        Parfum::create([
            'name' => 'Apel Fresh',
            'description' => 'Aroma Apel Segar',
            'type' => 'Soft',
            'modified_by' => 1
        ]);

        Parfum::create([
            'name' => 'Polo Sport',
            'description' => 'Aroma Segar',
            'type' => 'Soft',
            'modified_by' => 1
        ]);

        Parfum::create([
            'name' => 'Apel Sweet',
            'description' => 'Aroma Apel Manis',
            'type' => 'Soft',
            'modified_by' => 1
        ]);

        Parfum::create([
            'name' => 'No Parfum',
            'description' => 'Tidak Menggunakan Parfum (Netral)',
            'type' => 'Netral',
            'modified_by' => 1
        ]);

        Parfum::create([
            'name' => 'Molto Pink',
            'description' => 'Aroma Molto Pink',
            'type' => 'Hard',
            'modified_by' => 1
        ]);
    }
}
