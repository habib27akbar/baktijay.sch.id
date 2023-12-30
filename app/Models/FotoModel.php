<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoModel extends Model
{
    use HasFactory;
    protected $table = 'foto';
    protected $fillable = [
        'image',
        'keterangan',
        'status'
    ];
}
