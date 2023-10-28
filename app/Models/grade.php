<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $table ="grade";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'grade',
        'delstatus',
    ];

    public function pegawai()
    {
        return $this->hasMany(pegawai::class, 'pegawai');
    }

    public function pengajuanpotongan()
    {
        return $this->hasMany(pengajuanptongan::class, 'pengajuanpotongan');
    }

    public function pengajuanpajak()
    {
        return $this->hasMany(pengajuanpajak::class, 'pengajuanpajak');
    }

    public function rekapitulasi()
    {
        return $this->hasMany(rekapitulasi::class, 'rekapitulasi');
    }

    public function hitung()
    {
        return $this->hasMany(hitung::class, 'hitung');
    }
}
