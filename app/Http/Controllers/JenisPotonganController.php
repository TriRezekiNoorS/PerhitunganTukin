<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenispotongan;
class JenisPotonganController extends Controller
{
    public function tampilJenisPotongan()
    {
        $jenis = jenispotongan::all();

        return view('Pengajuan.jenis-potongan', compact('jenis'));
    }

    public function tampilInputJenisPotongan()
    {
        return view('Pengajuan.input-jenispotongan');
    }

    public function simpanJenisPotongan(Request $request){

        jenispotongan::create([
            'id' =>$request->id,
            'jenis' =>$request->jenis,
            'delstatus' => 1,
        ]);
        return redirect('jenis-potongan');
    }

    public function destroy($id){
        $jenis = jenispotongan::FindOrFail($id);
        $jenis->delete();
        return redirect('jenis-potongan');
    }
}
