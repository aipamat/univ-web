<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestimoniAlumni extends Model
{
    use HasFactory;
    protected $table = 'testimoni_alumnis';

    protected $fillable = [
        'foto',
        'nama',
        'deskripsi',
        'id_fakultas',
        'id_prodi',
        'angkatan' 
    ];

    /**
     * Relasi ke tabel Fakultas
     */
    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id');
    }

    /**
     * Relasi ke tabel Program Studi
     */
    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'id_prodi', 'id');
    }
}
