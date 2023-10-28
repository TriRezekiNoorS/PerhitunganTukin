<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\potongan;
use App\Models\satker;
use App\Models\pengajuanpotongan;
class PotonganController extends Controller
{
    public function tampilHalamanPotongan()
    {

        $grades = potongan::all();

    return view('Perhitungan.potongan',compact ('grades'));
    }

    public function tampilPotongan1()
    {
        $grades = potongan::all();
        
    return view('Perhitungan.potongan1',compact ('grades'));
    }

    public function tampilInputPotongan()
    {
        $satker= satker::all();
        return view('Perhitungan.inputpotongan', compact('satker'));
    }

    public function tampilsinglePajak1()
    {

        $dtpengajuanpotongan = pengajuanpotongan::all();
        
    return view('Perhitungan.single-pajak1',compact ('dtpengajuanpotongan'));
    }


    public function SimpanPotongan(Request $request){
    
        potongan::create([
            'id'=>$request->id,
            'id_satker'=>$request->id_satker,
            'grade15'=>$request->grade15,
            'grade14'=>$request->grade14,
            'grade13'=>$request->grade13,
            'grade12'=>$request->grade12,
            'grade11'=>$request->grade11,
            'grade10'=>$request->grade10,
            'grade9'=>$request->grade9,
            'grade8'=>$request->grade8,
            'grade7'=>$request->grade7,
            'grade6'=>$request->grade6,
            'grade5'=>$request->grade5,
            'grade4'=>$request->grade4,
            'jumlah'=>$request->jumlah,
        ]);
    
        return redirect('potongan');
    }

    
    public function singleperhitungan(Request $request, $id)
{
    $potongan = potongan::where([
        ['delstatus', '=', true],
        ['id', '=', $id]
        ])->first();

    $jumlah = $potongan->grade15 + $potongan->grade14 + $potongan->grade13 + $potongan->grade12 + $potongan->grade11 + $potongan->grade10 + $potongan->grade9 + $potongan->grade8 + $potongan->grade7 + $potongan->grade6 + $potongan->grade5 + $potongan->grade4;

    return view('Perhitungan.single-perhitungan', compact('potongan', 'jumlah'));
}

public function destroy($id){
    $grades = potongan::FindOrFail($id);
    $grades ->delete();
    return redirect('potongan');
}



}
