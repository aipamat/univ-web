<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'pimpinans';
    protected $fillable = [
        'foto',
        'nama',
        'status',
        'id_fakultas',
        'bidang',
        'kata_sambutan'
    ];
    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id');
    }
}
