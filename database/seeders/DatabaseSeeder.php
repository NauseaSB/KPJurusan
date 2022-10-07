<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        //Dummy Kelompok
        User::create([
            'username' => 'mahasiswa',
            'password' => bcrypt('mahasiswa123')
        ]);

        Kelompok::create([
            'user_id' => '1',
            'mahasiswa_id' => '1',
            'mahasiswa_id2' => '2',
        ]);

        Mahasiswa::create([
            'nim' => '3411191006',
            'angkatan' => '2019',
            'nama' => 'ANDRIAN FEBRIANSYAH ISTIANTO',
            'telp' => '085782694080',
            'doswal' => 'ECD',
            'peminatan' => 'DSE',
            'ipk' => '3.5',
            't_sks' => '123',
            'semester' => 'GANJIL',
            't_akd' => '2022',
            'ket_mahasiswa' => 'mahasiswa1',
        ]);

        Mahasiswa::create([
            'nim' => '3411191003',
            'angkatan' => '2019',
            'nama' => 'ALBI MULYADI SAPARI',
            'telp' => '085782697203',
            'doswal' => 'ECD',
            'peminatan' => 'DSE',
            'ipk' => '3.5',
            't_sks' => '123',
            'semester' => 'GANJIL',
            't_akd' => '2022',
            'ket_mahasiswa' => 'mahasiswa2',
        ]);
    }
}
