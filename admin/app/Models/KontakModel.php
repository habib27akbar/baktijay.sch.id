<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakModel extends Model
{
    use HasFactory;
    //
    protected $table = 'kontak';
    protected $fillable = [
        'alamat',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'telepon',
        'fax'
    ];
}
