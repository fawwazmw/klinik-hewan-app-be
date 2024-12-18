<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    use HasFactory;

    protected $table = 'perkembangan';
    protected $primaryKey = 'id_perkembangan';
    protected $fillable = [
        'hewan_id',
        'tanggal',
        'berat_badan',
        'tinggi',
        'foto',
        'catatan',
    ];

    // Relasi ke model Hewan
    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'hewan_id', 'id');
    }
}
