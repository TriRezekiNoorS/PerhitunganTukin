<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table ="pegawai";
    protected $primarykey = "id";
    protected $fillable = [
	    'id',
        'namapegawai',
        'golongan_id',
        'jabatan_id',
        'grade_id',
        'satker_id',
        'delstatus',
    ];
    
    public function golongan()
    {
        return $this->belongsTo(golongan::class, "golongan_id");
    }
    
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class, "jabatan_id");
    }

    public function grade()
    {
        return $this->belongsTo(grade::class, "grade_id");
    }

    public function satker()
    {
        return $this->belongsTo(satker::class, "satker_id");
    }

    public function pengajuanpotongan()
    {
        return $this->hasMany(pengajuanptongan::class, 'pengajuanpotongan');
    }

    public function pengajuanpajak()
    {
        return $this->hasMany(pengajuanpajak::class, 'pengajuanpajak');
    }

    public function hitung()
    {
        return $this->hasMany(hitung::class, 'hitung');
    }

    

   
}
