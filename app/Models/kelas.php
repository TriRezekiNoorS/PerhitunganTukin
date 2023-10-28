<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table ="kelas";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'namakelas',
        'delstatus',
    ];

    public function satker()
    {
        return $this->hasMany(satker::class, 'satker');
    }
}
