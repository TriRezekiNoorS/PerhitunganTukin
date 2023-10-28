<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekapitulasi extends Model
{
    protected $table ="rekapitulasi";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'satker_id',
        'grade_id',
        'besarnyatunjangan',
        'jumlahtunjangankinerja',
        'faktorpengurang',
        'pajak',
        'jumlahkebutuhan',
    ];

    public function grade()
    {
        return $this->belongsTo(grade::class, "grade_id");
    }

    public function satker()
    {
        return $this->belongsTo(satker::class, "satker_id");
    }
}
