<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'merk',
        'kategori',
        'harga',
        'stok',
    ];

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_obat');
    }

}
