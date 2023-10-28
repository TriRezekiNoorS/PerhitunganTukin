<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuanpotongan;
use App\Models\pegawai;
use App\Models\grade;
use App\Models\jenispotongan;
use App\Models\satker;
class PengajuanPotonganController extends Controller
{
    public function TampilHalamanPengajuanPotongan()
    {
        $dtpengajuanpotongan = pengajuanpotongan::all();

    return view('Pengajuan.pengajuan_potongan',compact ('dtpengajuanpotongan'));
    }

    public function tampilHalamanTambahPengajuanPotongan()
    {
        
        $dtpegawai = pegawai::all();
        $grade     = grade::all();
        $jenis     = jenispotongan::all();
        $satker    = satker::all();
        return view('Pengajuan.input-pengajuanpotongan', compact ('dtpegawai','grade','jenis','satker'));
      
    }

    public function SimpanPengajuanPotongan(Request $request)
{
    pengajuanpotongan::create([
        'id'=>$request->id,
        'tanggal'=>$request->tanggal,
        'id_pegawai'=>$request->id_pegawai,
        'status'=>$request->status,
        'jenispotongan_id'=>$request->jenispotongan_id,
        'jumlahpotongan'=>$request->jumlahpotongan,

    ]);

    return redirect('pengajuan_potongan');
   }

   public function ubahPengajuanPotongan($id){
    $dtpengajuanpotongan=pengajuanpotongan::findOrFail($id);
    $dtpegawai = pegawai::all();
    $jenis = jenispotongan::all();
    return view('Pengajuan.edit-pengajuanpotongan', compact('dtpengajuanpotongan','dtpegawai','jenis'));
}

public function simpanPerubahanPengajuanPotongan(Request $request, $id){

    $dtpengajuanpotongan = pengajuanpotongan::FindOrFail($id);

    $data = [
        'id'=>$request->id,
        'tanggal'=>$request->tanggal,
        'id_pegawai'=>$request->id_pegawai,
        'status'=>$request->status,
        'jenispotongan_id'=>$request->jenispotongan_id,
        'jumlahpotongan'=>$request->jumlahpotongan,
        'delstatus' => 1,
    ];

    $dtpengajuanpotongan->update($data);
    return redirect('pengajuan_potongan');
}


   public function destroy($pegawai_id){
    $dtpengajuanpotongan = PengajuanPotongan::FindOrFail($pegawai_id);
    $dtpengajuanpotongan->delete();
    return redirect('pengajuan_potongan');
}
}
