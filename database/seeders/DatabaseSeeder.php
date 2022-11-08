<?php

namespace Database\Seeders;

use App\Models\BukaTutup;
use App\Models\Role;
use App\Models\Kelompok;
use App\Models\Mahasiswa;
use App\Models\Dosen;
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
        // \App\Models\kelompok::factory(100)->create();

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

        //Dosen
        Dosen::create([
            'nama' => 'Ade Kanianingsih, S.Si., M.Stat',
            'code' => 'AKH'
        ]);
        Dosen::create([
            'nama' => 'Agus Komarudin, S.Kom, M.T',
            'code' => 'AGK'
        ]);
        Dosen::create([
            'nama' => 'Asep Id Hadiana, S.Si., M.Kom',
            'code' => 'AIH'
        ]);
        Dosen::create([
            'nama' => 'Dr. Esmeralda Contessa Djamal, S.T., MT',
            'code' => 'ECD'
        ]);

        Dosen::create([
            'nama' => 'Eddie Krishna Putra, Drs., M.T',
            'code' => 'EKP'
        ]);
        Dosen::create([
            'nama' => 'Edvin Ramadhan, S.Kom., M.T',
            'code' => 'EDR'
        ]);
        Dosen::create([
            'nama' => 'Fajri Rakhmat Umbara, S.T., M.T',
            'code' => 'FRU'
        ]);
        Dosen::create([
            'nama' => 'Fatan Kasyidi, S.Kom., M.T.',
            'code' => 'FKI'
        ]);
        Dosen::create([
            'nama' => 'Gunawan Abdillah, S.Si., M.Cs.',
            'code' => 'GAH'
        ]);
        Dosen::create([
            'nama' => 'Herdi Ashaury, S.Kom., M.T',
            'code' => 'HAY'
        ]);
        Dosen::create([
            'nama' => 'Melina, S.Si., M.Si.',
            'code' => 'MLA'
        ]);
        Dosen::create([
            'nama' => 'Puspita Nurul Sabrina, S.Kom., M.T',
            'code' => 'PNS'
        ]);
        Dosen::create([
            'nama' => 'Rezki Yuniarti, S.Si, M.T.',
            'code' => 'RZY'
        ]);
        Dosen::create([
            'nama' => 'Ridwan Ilyas, S.Kom., M.T',
            'code' => 'RIS'
        ]);
        Dosen::create([
            'nama' => 'Wina Witanti, S.T, M.T.',
            'code' => 'WNI'
        ]);
        Dosen::create([
            'nama' => 'Yulison Herry Chrisnanto, S.T., M.T.',
            'code' => 'YHC'
        ]);
        BukaTutup::create([
            'kp1' => '1',
            'kp2' => '0',
        ]);
    }
}
