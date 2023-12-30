<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadModel extends Model
{
    use HasFactory;
    protected $table = 'download';
    protected $fillable = [
        'image',
        'keterangan',
        'status'
    ];
}
