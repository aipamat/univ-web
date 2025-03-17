<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'gambar',
        'nama'
    ];

    public function kampuses(): BelongsToMany
    {
        return $this->belongsToMany(Kampus::class, 'kampus_fasilitas');
    }
}
