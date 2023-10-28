<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuanpajak;
use App\Models\pegawai;
use App\Models\grade;
use App\Models\jenispotongan;
use App\Models\satker;
class PengajuanPajakController extends Controller
{
    public function TampilHalamanPengajuanPajak()
    {
        $pengajuanpajak = pengajuanpajak::all();
        
    return view('Pengajuan.pengajuanpajak',compact ('pengajuanpajak'));
    }

    public function tampilHalamanTambahPengajuanPajak()
    {
        $dtpegawai = pegawai::all();
        $grade     = grade::all();
        $jenis     = jenispotongan::all();
        $satker    = satker::all();
        return view('Pengajuan.input-pengajuanpajak', compact ('dtpegawai','grade','jenis','satker'));
      
    }

    public function SimpanPengajuanPajak(Request $request)
    {
    pengajuanpajak::create([
        'id'=>$request->id,
        'tanggal'=>$request->tanggal,
        'id_pegawai'=>$request->id_pegawai,
        'status'=>$request->status,
        'pph21'=>$request->pph21,
        'delstatus' => 1,

    ]);

    return redirect('pengajuanpajak');
   }

   //Edit
   public function ubahPengajuanPajak($id){
    $dtpengajuanpajak=pengajuanpajak::findOrFail($id);
    $dtpegawai = pegawai::all();
    return view('Pengajuan.edit-pengajuanpotongan', compact('dtpengajuanpajak','dtpegawai'));
}

public function simpanPerubahanPengajuanPajak(Request $request, $id){

    $dtpengajuanpajak = pengajuanpajak::FindOrFail($id);

    $data = [
        'id'=>$request->id,
        'tanggal'=>$request->tanggal,
        'id_pegawai'=>$request->id_pegawai,
        'status'=>$request->status,
        'pph21'=>$request->pph21,
        'delstatus' => 1,
    ];

    $dtpengajuanpajak->update($data);
    return redirect('pengajuanpajak');
}

   public function destroy($id){
    $dtpengajuanpajak = pengajuanpajak::FindOrFail($id);
    $dtpengajuanpajak ->delete();
    return redirect('pengajuanpajak');
}
}
