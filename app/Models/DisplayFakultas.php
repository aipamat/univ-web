<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisplayFakultas extends Model
{
    use HasFactory;
    protected $table = 'display_fakultas';
    protected $fillable = [
        'banner_utama',
        'deskripsi'
    ];
}
