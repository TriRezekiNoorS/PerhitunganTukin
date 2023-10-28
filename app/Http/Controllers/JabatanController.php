<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;
class JabatanController extends Controller
{
    public function tampilJabatan()
    {
        $jabatan = jabatan::all();

        return view('Data.jabatan', compact('jabatan'));
    }

    public function tampilInputJabatan()
    {
        return view('Data.inputjabatan');
    }

    public function simpanJabatan(Request $request){

        jabatan::create([
            'id' =>$request->id,
            'namajabatan' =>$request->namajabatan,
            'delstatus' => 1,
        ]);
        return redirect('jabatan');
    }

    public function ubahJabatan($id){
        $jabatan=jabatan::findOrFail($id);
        return view('Data.edit-jabatan', compact('jabatan'));
    }
    
    public function SimpanPerubahanJabatan(Request $request, $id){
    
        $jabatan = jabatan::FindOrFail($id);
    
        $data = [
            'id' =>$request->id,
            'namajabatan' =>$request->namajabatan,
            'delstatus' => 1,
        ];
    
        $jabatan->update($data);
        return redirect('jabatan');
    }

    public function destroy($id){
        $jabatan = jabatan::FindOrFail($id);
        $jabatan->delete();
        return redirect('jabatan');
    }


}
