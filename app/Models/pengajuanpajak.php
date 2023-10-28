<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanpajak extends Model
{
    protected $table ="pengajuanpajak";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'tanggal',
        'id_pegawai',
        'status',
        'pph21',
    ];

 public function pegawai()
    {
        return $this->belongsTo(pegawai::class, 'id_pegawai', 'id');
    }
    
    public function grade()
    {
        return $this->belongsTo(grade::class, "grade_id");
    }
}
