<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmkBaktijayaModel extends Model
{
    use HasFactory;
    protected $table = 'smk_baktijaya';
    protected $fillable = [
        'description',
        'image',
        'status'
    ];
}
