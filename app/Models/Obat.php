<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'obat';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_obat',
        'deskripsi',
        'kategori',
        'dosis',
        'harga',
    ];
}
