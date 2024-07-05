<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'jk',
        'alamat',
        'sakit',
        'no_telp',
        'id_user',
    ];

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pelanggan');
    }
}
