<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanpotongan extends Model
{
    protected $table ="pengajuanpotongan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
	    'tanggal',
        'id_pegawai',
        'status',
        'jenispotongan_id',
        'jumlahpotongan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai', 'id');
    }

    public function jenispotongan()
    {
        return $this->belongsTo(jenispotongan::class, "jenispotongan_id");
    }
}
