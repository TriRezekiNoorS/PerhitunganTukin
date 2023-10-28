<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class potongan extends Model
{
    protected $table ="potongan";
    protected $primarykey = "id";
    protected $fillable = [
	    'id',
        'id_satker',
        'grade15',
        'grade14',
        'grade13',
        'grade12',
        'grade11',
        'grade10',
        'grade9',
        'grade8',
        'grade7',
        'grade6',
        'grade5',
        'grade4',
        'jumlah',
        'delstatus',
    ];

    public function satker()
    {
        return $this->belongsTo(satker::class, 'id_satker', 'id');
    }

}
