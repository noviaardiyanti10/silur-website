<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $fillable = [
        'nama_kategori',
        'pengusaha_id',
    ];

    public function pengusaha()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }

    public function scopeCreatedBy()
    {
        return $this->where('pengusaha_id', auth()->user()->id)->latest();
    }
}
