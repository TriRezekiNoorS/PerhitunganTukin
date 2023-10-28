<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    protected $table ="golongan";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'namagolongan',
        'delstatus',
    ];

    public function pegawai()
    {
        return $this->hasMany(pegawai::class, 'pegawai');
    }
}
