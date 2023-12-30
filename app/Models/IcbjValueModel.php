<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IcbjValueModel extends Model
{
    use HasFactory;
    protected $table = 'icbj_values';
    protected $fillable = [
        'description',
        'image',
        'status'
    ];
}
