<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeasiswaUtama extends Model
{
    use HasFactory;
    protected $table = 'beasiswa_utamas';
    protected $fillable = [
        'banner'
    ];
}
