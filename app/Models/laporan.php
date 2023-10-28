<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table ="laporan";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'tanggal',
        'satker_id',
        'saldoawal',
        'usulantukin',
        'totalkebutuhan',
        'pajak',
        'potongan',
        'tunjangandibayar',
        'jumlah',
        'status',
    ];

    public function satker()
    {
        return $this->belongsTo(satker::class, "satker_id");
    }
}
