<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'user';
    protected $fiilable = [
        'id_role',
        'nama_lengkap',
        'nama_usaha',
        'nomor_telp',
        'email',
        'kabupaten',
        'kecamatan',
        'alamat',
        'username',
        'password'
    ];
}
