<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaktuModel extends Model
{
    use HasFactory;
    protected $table = 'mst_waktu';
    protected $fillable = [
        'kode',
        'hari',
        'jam'
    ];
}
