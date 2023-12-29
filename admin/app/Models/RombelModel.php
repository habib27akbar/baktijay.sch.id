<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RombelModel extends Model
{
    use HasFactory;
    protected $table = 'mst_rombel';
    protected $fillable = [
        'id_sekolah',
        'nama',
        'walikelas'
    ];
}
