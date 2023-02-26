<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
        Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data siswa
        siswa::create([
            'id' => '20209150',
            'nama' => 'Rinjani Santi',
            'kelas' => 'RPL 1',
        ]);
        siswa::create([
            'id' => '20209151',
            'nama' => 'Kiani Rena',
            'kelas' => 'RPL 2',
        ]);
        siswa::create([
            'id' => '20209152',
            'nama' => 'Ibrahim April',
            'kelas' => 'RPL 3',
        ]);
        siswa::create([
            'id' => '20290987',
            'nama' => 'Rahmawati',
            'kelas' => 'RPL 3',
        ]);
        siswa::create([
            'id' => '20208950',
            'nama' => 'Ferdi Sabo',
            'kelas' => 'RPL 4',
        ]);
        siswa::create([
            'id' => '20208951',
            'nama' => 'Feli Yanti',
            'kelas' => 'RPL 9',
        ]);
        //Input Data Aspirasi
        // Aspirasi::create([
        //     'id' => 1,
        //     'id_aspirasi' => 1,
        //     'kategori_id' => 2,
        //     'status' => 'Menunggu',
        // ]);
        // Aspirasi::create([
        //     'id' => 2,
        //     'id_aspirasi' => 2,
        //     'kategori_id' => 3,
        //     'status' => 'Menunggu',
        // ]);
        //Input Aspirasi
        // Input_aspirasi::create([
        //     'nis' => '20209150',
        //     'kategori_id' => '2',
        //     'lokasi' => 'SMK TELKOM',
        //     'ket' => 'kehilangan motor',
        // ]);
        // Input_aspirasi::create([
        //     'nis' => '20209151',
        //     'kategori_id' => '3',
        //     'lokasi' => 'Kalideres',
        //     'ket' => 'Kali kotor',
        // ]);
        //input data admin
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}