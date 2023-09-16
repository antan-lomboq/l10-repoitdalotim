<?php

namespace Database\Seeders;

use App\Models\ProfilInstansi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilInstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profil_instansi = [
            [
                'nama_instansi' => 'nama instansi',
                'visi_misi' => 'visi dan misi instansi',
                'nama_pimpinan' => 'nama pimpinan instansi',
                'nip_pimpinan' => 'NIP pimpinan',
                'alamat_instansi' => 'alamat Instansi',
                'kontak' => 'kontak instansi'
            ],
        ];
        ProfilInstansi::insert($profil_instansi);
    }
}
