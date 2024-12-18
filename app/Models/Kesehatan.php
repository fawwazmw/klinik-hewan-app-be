<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesehatan extends Model
{
    use HasFactory;

    protected $table = 'kesehatan';

    protected $fillable = [
        'hewan_id',  // Gunakan hewan_id untuk relasi
        'tanggal',
        'gejala',
        'diagnosis',
        'tindakan',
        'catatan',
    ];

    // Relasi ke tabel Hewan
    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id','id');
        
    }
}