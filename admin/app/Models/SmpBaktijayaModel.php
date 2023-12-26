<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmpBaktijayaModel extends Model
{
    use HasFactory;
    protected $table = 'smp_baktijaya';
    protected $fillable = [
        'description',
        'image',
        'status'
    ];
}
