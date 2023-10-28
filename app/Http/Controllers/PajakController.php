<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pajak;
use App\Models\satker;
use App\Models\pengajuanpajak;
class PajakController extends Controller
{
    public function tampilHalamanPajak()
    {
        $pajak= pajak::all();
        
    return view('Perhitungan.pajak', compact('pajak'));
    }

    public function tampilPajak1()
    {
        $pajak= pajak::all();
        
    return view('Perhitungan.pajak1', compact('pajak'));
    }

    public function tampilsinglePajak2()
    {
        $pengajuanpajak = pengajuanpajak::all();
        
    return view('Perhitungan.single-pajak2', compact('pengajuanpajak'));
    }


    public function tampilInputPajak()
    {
        $satker= satker::all();
        return view('Perhitungan.input-pajak', compact('satker'));
    }

    public function SimpanPajak(Request $request){
    
        pajak::create([
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
    
        return redirect('pajak');
    }

    public function singlepajak(Request $request, $id)
    {
    $pajak = pajak::where([
        ['delstatus', '=', true],
        ['id', '=', $id]
        ])->first();

    $jumlah = $pajak->grade15 + $pajak->grade14 + $pajak->grade13 + $pajak->grade12 + $pajak->grade11 + $pajak->grade10 + $pajak->grade9 + $pajak->grade8 + $pajak->grade7 + $pajak->grade6 + $pajak->grade5 + $pajak->grade4;

    return view('Perhitungan.single-pajak', compact('pajak', 'jumlah'));
}

public function destroy($id){
    $pajak = pajak::FindOrFail($id);
    $pajak ->delete();
    return redirect('pajak');
}
}
