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

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function pengusaha()
    {
        return $this->belongsTo(Pengusaha::class, 'pengusaha_id');
    }

    public function scopeCreatedBy()
    {
        return $this->where('pengusaha_id', auth()->user()->id)->latest();
    }
}
