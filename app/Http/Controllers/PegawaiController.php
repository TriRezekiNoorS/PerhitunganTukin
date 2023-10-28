<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\jabatan;
use App\Models\golongan;
use App\Models\grade;
use App\Models\satker;
class PegawaiController extends Controller
{
    //CRUD Tampil
    public function tampilHalamanPegawai(Request $request)
    {
        if($request->has('search')){
            $dtpegawai = pegawai::where('namapegawai','LIKE','%'.$request->search.'%')->get();
        }
        else{

        $dtpegawai= pegawai::all();
        }
    return view ('Data.pegawai', compact ('dtpegawai'));
    }

    public function tampilPegawai1()
    {
        $dtpegawai= pegawai::all();
        
    return view ('Data.pegawai1', compact ('dtpegawai'));
    }

    //CRUD TAMBAH
    public function tampilHalamanTambahPegawai()
    {
        $jabatan = jabatan::all();
        $golongan = golongan::all();
        $grade = grade::all();
        $satker = satker::all();
        return view('Data.inputpegawai',compact('jabatan','golongan','grade','satker'));
    }

    //CRUD Simpan
    public function SimpanPegawai(Request $request)
{
    pegawai::create([
        'id'=>$request->id,
        'namapegawai'=>$request->namapegawai,
        'golongan_id'=>$request->golongan_id,
        'jabatan_id'=>$request->jabatan_id,
        'grade_id'=>$request->grade_id,
        'satker_id'=>$request->satker_id,

    ]);

    return redirect('pegawai');
   }
    
   //CRUD Edit
   public function ubahPegawai($id){
    $dtpegawai=pegawai::findOrFail($id);
    $jabatan = jabatan::all();
    $golongan = golongan::all();
    $grade = grade::all();
    $satker = satker::all();
    return view('Data.edit_pegawai', compact('dtpegawai','jabatan','golongan','grade','satker'));
}

public function simpanPerubahan(Request $request, $id){

    $dtpegawai = pegawai::FindOrFail($id);

    $data = [
        'id'=>$request->id,
        'namapegawai'=>$request->namapegawai,
        'golongan_id'=>$request->golongan_id,
        'jabatan_id'=>$request->jabatan_id,
        'grade_id'=>$request->grade_id,
        'satker_id'=>$request->satker_id,
        'delstatus' => 1,
    ];

    $dtpegawai->update($data);
    return redirect('pegawai');
}

   //crud hapus
   public function destroy($id){
    $dtpegawai = pegawai::FindOrFail($id);
    $dtpegawai ->delete();
    return redirect('pegawai');
}

}
