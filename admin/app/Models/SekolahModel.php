<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SekolahModel extends Model
{
    use HasFactory;
    protected $table = 'mst_sekolah';
    protected $fillable = [
        'nama',
        'jenjang'
    ];
}
