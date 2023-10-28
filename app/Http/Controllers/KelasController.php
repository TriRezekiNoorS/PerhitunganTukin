<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
class KelasController extends Controller
{
    public function tampilHalamanKelas()
    {
        $kelas = kelas::all();

        return view('Data.kelas',compact('kelas'));
    }

    public function tampilInputKelas()
    {
        return view('Data.input_kelas');
    }

    public function simpanKelas(Request $request){

        kelas::create([
            'id' =>$request->id,
            'namakelas' =>$request->namakelas,
            'delstatus' => 1,
        ]);
        return redirect('kelas');
    }

    public function ubahKelas($id){
        $kelas=kelas::findOrFail($id);
        return view('Data.edit-kelas', compact('kelas'));
    }
    
    public function SimpanPerubahanKelas(Request $request, $id){
    
        $kelas = kelas::FindOrFail($id);
    
        $data = [
            'id' =>$request->id,
            'namakelas' =>$request->namakelas,
            'delstatus' => 1,
        ];
    
        $kelas->update($data);
        return redirect('kelas');
    }


    public function destroy($id){
        $kelas = kelas::FindOrFail($id);
        $kelas->delete();
        return redirect('kelas');
    }
}
