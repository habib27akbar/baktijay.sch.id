<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademikModel extends Model
{
    use HasFactory;
    protected $table = 'mst_thnakademik';
    protected $fillable = [
        'kode',
        'nama',
        'periode'
    ];
}
