<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\laporan;
use App\Models\satker;

class LaporanController extends Controller
{
    public function tampilHalamanlaporan()
    {
        $laporan= laporan::all();
        
    return view('laporan.laporan', compact('laporan'));
    }

    public function tampilHalamanStatus()
    {
        $laporan= laporan::all();
        
    return view('laporan.status', compact('laporan'));
    }

    public function tampilInputLaporan()
    {
        $satker= satker::all();
        return view('laporan.input-laporan',compact('satker'));
       
    }

    public function SimpanLaporan(Request $request)
    {

        $status = $request->input('status', 1);

    laporan::create([
        'id'=>$request->id,
        'tanggal'=>$request->tanggal,
        'satker_id'=>$request->satker_id,
        'saldoawal'=>$request->saldoawal,
        'usulantukin'=>$request->usulantukin,
        'totalkebutuhan'=>$request->totalkebutuhan,
        'pajak'=>$request->pajak,
        'potongan'=>$request->potongan,
        'tunjangandibayar'=>$request->tunjangandibayar,
        'jumlah'=>$request->jumlah,
        'status'=>$status,

    ]);

    Session::flash('success_message', 'Data Telah Berhasil Disimpan!');

    return redirect('laporan');
   }

   public function destroy($id){
    $laporan = laporan::FindOrFail($id);
    $laporan ->delete();
    return redirect('laporan');
    }

    //CETAK/PRINT
    public function tampilCetaklaporan()
    {
        $laporan= laporan::all();
        
    return view('laporan.cetak-laporan', compact('laporan'));
    }

    //VALIDASI
    public function ValidasiLaporan($id){
     try{
        laporan::where('id', $id)->update([
            'status' => 'selesai',
        ]);
        \Session::flash('sukses', 'Data successfully updated.');
    }catch(\Exception $e){
        \Session::flash('gagal', 'Error: '. $e->getMessage());
        throw $e;
    }
    return redirect()->back();
    }

    public function CetakTanggal(){

        return view('Laporan.cetak-pertanggal');

    }

    //public function CetakLaporanPertanggal(tanggal){

        //return view('Laporan.cetak-pertanggal');

    //}
}

