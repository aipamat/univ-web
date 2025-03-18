<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUtama extends Model
{
    use HasFactory;
    protected $table = 'fasilitas_utamas';
    protected $fillable = [
        'banner_utama'
    ];
}
