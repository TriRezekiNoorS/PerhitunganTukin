<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\satker;
use App\Models\kelas;
class SatkerController extends Controller
{
    public function tampilHalamanSatker(Request $request)
    {
        if($request->has('search')){
            $dtsatker = satker::where('namasatker','LIKE','%'.$request->search.'%')->get();
        }
        else{
        $dtsatker = satker::all();
        }
    return view('Pengguna.satker', compact ('dtsatker'));
    }

    public function tampilSatker1()
    {
        $dtsatker = satker::all();
        
    return view('Pengguna.satker1', compact ('dtsatker'));
    }

    //CRUD input
    public function tampilHalamanTambahSatker()
    {
        $kelas = kelas::all();

        return view('Pengguna.inputsatker',compact('kelas'));
    }

    public function simpanSatker(Request $request){

        satker::create([
            'id' =>$request->id,
            'namasatker' =>$request->namasatker,
            'kelas_id' =>$request->kelas_id,
            'alamat' =>$request->alamat,
            'delstatus' => 1,
        ]);
        return redirect('satker');
    }

    //Edit
    public function ubahSatker($id){
        $dtsatker=satker::findOrFail($id);
        $kelas = kelas::all();
        return view('Pengguna.edit-satker', compact('dtsatker','kelas'));
    }

    public function simpanPerubahanSatker(Request $request, $id){

        $dtsatker = satker::FindOrFail($id);
    
        $data = [
            'id' =>$request->id,
            'namasatker' =>$request->namasatker,
            'kelas_id' =>$request->kelas_id,
            'alamat' =>$request->alamat,
            'delstatus' => 1,
        ];

        $dtsatker->update($data);
        return redirect('satker');
    }

    //crud hapus
    public function destroy($id){
        $satker = satker::FindOrFail($id);
        $satker->delete();
        return redirect('satker');
    }
}
