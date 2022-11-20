<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'name' => 'Aksesoris Kaki dan Kepala',
            'description' => 'Segala Jenis Aksesoris Kaki dan Kepala',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Aksesoris Mobil',
            'description' => 'Segala Jenis Aksesoris Mobil',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Aksesoris Rumah',
            'description' => 'Segala Jenis Aksesoris Rumah',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Atasan',
            'description' => 'Segala Jenis Atasan',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Bahan Kulit',
            'description' => 'Segala Jenis Bahan Kulit',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Baju Rohani',
            'description' => 'Segala Jenis Baju Rohani',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Bahan Set',
            'description' => 'Segala Jenis Baju Set',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Bawahan',
            'description' => 'Segala Jenis Bawahan',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Bedsheet',
            'description' => 'Segala Jenis Bedsheet',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Bucket',
            'description' => 'Hanya untuk Paket Bucket',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Corporate',
            'description' => 'Hanya untuk Corporate',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Lain Lain',
            'description' => 'Segala Jenis Lainnya',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Membership',
            'description' => 'Hanya untuk Member',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Pakaian Pesta',
            'description' => 'Segala Jenis Pakaian Pesta',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Perlengkapan Bayi',
            'description' => 'Segala Jenis Perlengkapan Bayi',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Promo',
            'description' => 'Hanya untuk Promo',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Sepatu/Sandal',
            'description' => 'Segala Jenis Sepatu / Sandal',
            'modified_by' => 1
        ]);

        Kategori::create([
            'name' => 'Tas',
            'description' => 'Segala Jenis Tas',
            'modified_by' => 1
        ]);
    }
}
