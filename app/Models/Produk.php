<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'nama_produk',
        'jumlah',
        'satuan',
        'harga',
        'deskripsi',
        'kategori_id',
        'pengusaha_id',
        'foto',
        'status',
    ];
}
