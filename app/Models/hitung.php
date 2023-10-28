<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hitung extends Model
{
    protected $table ="hitung";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'grade_id',
        'jumlahpenerima',
        'tunjanganperkj',
        'jumlahtunjangan',
        'delstatus',
    ];

    public function grade()
    {
        return $this->belongsTo(grade::class, "grade_id");
    }
}
