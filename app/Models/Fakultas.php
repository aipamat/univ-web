<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $table = 'fakultas';
    protected $fillable = [
        'banner',
        'display',
        'deskripsi',
        'nama_fakultas',
    ];

    public function programStudi()
    {
        return $this->hasMany(ProgramStudi::class, 'id_fakultas', 'id');
    }

    public function dekan()
    {
        return $this->hasOne(Pimpinan::class, 'id_fakultas', 'id')
                    ->where('status', 'Dekan');
    }

    public function daftarKaprodi()
    {
        return $this->hasMany(Pimpinan::class, 'id_fakultas', 'id')
                    ->where('status', 'Kepala Prodi');
    }

}
