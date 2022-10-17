<?php

namespace Database\Seeders;

use App\Models\Role;
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
            'role_id' => '2',
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

        //role
        Role::create([
            'nama' => 'admin',
            'redirect_to' => '/admin'
        ]);
        Role::create([
            'nama' => 'mahasiswa',
            'redirect_to' => '/dashboard'
        ]);
        Role::create([
            'nama' => 'koordinatorKP',
            'redirect_to' => '/koorkp'
        ]);
        Role::create([
            'nama' => 'tataUsaha',
            'redirect_to' => '/TU'
        ]);

        //user lainnya
        User::create([
            'role_id' => '1',
            'username' => 'admin',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'role_id' => '3',
            'username' => 'koorkp',
            'password' => bcrypt('koorkp123')
        ]);

        User::create([
            'role_id' => '4',
            'username' => 'tatausaha',
            'password' => bcrypt('tatausaha123')
        ]);
    }
}
