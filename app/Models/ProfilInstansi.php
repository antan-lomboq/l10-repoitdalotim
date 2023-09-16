<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilInstansi extends Model
{
    use HasFactory;

    protected $table = 'profil_instansi';

    protected $fillable = [
        'nama_instansi',
        'visi_misi',
        'nama_pimpinan',
        'nip_pimpinan',
        'alamat_instansi',
        'kontak'
    ];

    public $timestamps = false;
}
