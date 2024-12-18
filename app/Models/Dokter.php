<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'dokter'; // Ubah menjadi 'dokter' bukan 'dokters'

    // Mengatur kolom yang bisa diisi massal
    protected $fillable =
        [
            'nama',
            'spesialis',
            'tahun',
            'kepuasan',
            'harga',
            'NIP'
        ];
}
