<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rekapitulasi;
use App\Models\satker;
use App\Models\grade;
class RekapitulasiController extends Controller
{
    public function TampilHalamanRekapitulasi()
    {
        $rekapitulasi = rekapitulasi::all();
        
    return view('Pengajuan.rekapitulasi',compact ('rekapitulasi'));
    }

    public function tampilHalamanTambahRekapitulasi()
    {
        $satker    = satker::all();
        $grade     = grade::all();
        return view('Pengajuan.input-pengajuanpajak', compact ('satker','grade'));
      
    }

    public function SimpanRekapitulasi(Request $request)
    {
    rekapitulasi::create([
        'id'=>$request->id,
        'satker_id'=>$request->satker_id,
        'grade_id'=>$request->grade_id,
        'besarnyatunjangankinerja'=>$request->besarnyatunjangankinerja,
        'jumlahpegawai'=>$request->jumlahpegawai,
        'jumlahtunjangankinerja'=>$request->jumlahtunjangankinerja,
        'faktorpengurang'=>$request->faktorpengurang,
        'pajak'=>$request->pajak,
        'jumlahkebutuhan'=>$request->jumlahkebutuhan,
    ]);

    return redirect('rekapitulasi');
   }

}
