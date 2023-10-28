<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satker extends Model
{
    protected $table ="satker";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'namasatker',
        'kelas_id',
        'alamat',
        'delstatus',
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, "kelas_id");
    }

    public function potongan()
    {
        return $this->hasMany(potongan::class, 'potongan');
    }

    public function pajak()
    {
        return $this->hasMany(pajak::class, 'pajak');
    }

    public function pengajuanpotongan()
    {
        return $this->hasMany(pengajuanptongan::class, 'pengajuanpotongan');
    }

    public function pengajuanpajak()
    {
        return $this->hasMany(pengajuanpajak::class, 'pengajuanpajak');
    }

    public function laporan()
    {
        return $this->hasMany(laporan::class, 'laporan');
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
