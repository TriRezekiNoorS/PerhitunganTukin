<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hitung;
use App\Models\grade;
class PerhitunganController extends Controller
{
//Hitung
    public function tampilHalamanHitung()
    {
        $hitung= hitung::all();
        
    return view('Perhitungan.hitung', compact('hitung'));
    }

    public function tampilHitung1()
    {
        $hitung= hitung::all();
        
    return view('Perhitungan.hitung1', compact('hitung'));
    }

    public function tampilHalamanTambahHitung()
    {
        $grade = grade::all();
        return view('Perhitungan.input_hitung', compact('grade'));
    }

    public function SimpanHitung(Request $request){
    
        hitung::create([
            'id'=>$request->id,
            'grade_id'=>$request->grade_id,
            'jumlahpenerima'=>$request->jumlahpenerima,
            'tunjanganperkj'=>$request->tunjanganperkj,
            'jumlahtunjangan'=>$request->jumlahtunjangan,
        ]);
    
        return redirect('hitung');
    }

    
    public function singleHitung(Request $request, $id)
{
    $hitung = hitung::where([
        ['delstatus', '=', true],
        ['id', '=', $id]
        ])->first();

    $jumlahtunjangan = $hitung->jumlahpenerima * $hitung->tunjanganperkj;

    return view('Perhitungan.singlehitung', compact('hitung', 'jumlahtunjangan'));
}

public function destroy($id){
    $hitung = hitung::FindOrFail($id);
    $hitung ->delete();
    return redirect('hitung');
}


}
