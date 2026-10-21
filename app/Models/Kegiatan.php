<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class Kegiatan extends Model
{
    use HasFactory;
    protected $fillable = ['kode_kegiatan','nama_kegiatan','kategori','tanggal','lokasi','penanggung_jawab',
    'keterangan'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];
    
}
