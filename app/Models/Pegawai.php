<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'jk',
        'gaji',
    ];

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pegawai');
    }
}
