<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembayaranModel extends Model
{
    use HasFactory;
    protected $table = 'ms_jenis_pembayaran';
    protected $fillable = [
        'nama_jenis_pembayaran'
    ];
}
