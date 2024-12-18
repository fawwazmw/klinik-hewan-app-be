<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = "hewan";
    protected $fillable = ['nama_hewan','jenis','pemilik'];

    public function kesehatan()
    {
        return $this->hasMany(Kesehatan::class, 'id');
    }
    public function perkembangan()
    {
        return $this->hasMany(Perkembangan::class, 'hewan_id', 'id');
    }
}
