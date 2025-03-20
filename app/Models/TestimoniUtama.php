<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimoniUtama extends Model
{
    use HasFactory;
    protected $table = 'testimoni_utamas';
    protected $fillable = [
        'banner_utama'
    ];
}
