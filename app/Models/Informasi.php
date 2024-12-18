<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'informasi';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'title',
        'owner',
    ];
}
