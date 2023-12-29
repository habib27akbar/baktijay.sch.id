<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;
    protected $table = 'mst_mata_pelajaran';
    protected $fillable = [
        'nama'
    ];
}
