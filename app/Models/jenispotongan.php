<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenispotongan extends Model
{
    protected $table ="jenispotongan";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'jenis',
        'delstatus',
    ];

    public function pengajuanpotongan()
    {
        return $this->hasMany(pengajuanptongan::class, 'pengajuanpotongan');
    }
}
