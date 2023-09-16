<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dokumen extends Model
{
    use HasFactory;

    protected $table = 'dokumen';

    protected $fillable = [
        'nama_dokumen',
        'owner',
        'author',
        'tahun',
        'deskripsi',
        'kategori_id',
        'file_upload'
    ];

    public function kategorinya(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
