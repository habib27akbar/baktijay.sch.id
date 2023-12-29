<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KewarganegaraanModel extends Model
{
    use HasFactory;
    protected $table = 'master_kewarganegaraan';
    protected $fillable = [
        'ISO',
        'alpha_2_code',
        'alpha_3_code',
        'numeric_code',
        'nama_negara',
        'latitude_average',
        'longitude_average'
    ];
}
