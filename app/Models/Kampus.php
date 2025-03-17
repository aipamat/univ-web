<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'kampuses';

    protected $fillable = [
        'banner_utama',
        'gambar_kampus',
        'nama_kampus',
        'alamat',
        'deskripsi',
    ];

    public function fasilitas(): BelongsToMany
    {
        return $this->belongsToMany(Fasilitas::class, 'kampus_fasilitas');
    }
}
