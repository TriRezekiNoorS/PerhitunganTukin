<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\golongan;
class GolonganController extends Controller
{
    public function tampilGolongan()
    {
        $golongan = golongan::all();

        return view('Data.golongan', compact('golongan'));
    }

    public function tampilInputGolongan()
    {
        return view('Data.input-golongan');
    }

    public function simpanGolongan(Request $request){

        golongan::create([
            'id' =>$request->id,
            'namagolongan' =>$request->namagolongan,
            'delstatus' => 1,
        ]);
        return redirect('golongan');
    
    }

    public function ubahGolongan($id){
        $golongan=golongan::findOrFail($id);
        return view('Data.edit-golongan', compact('golongan'));
    }
    
    public function SimpanPerubahanGolongan(Request $request, $id){
    
        $golongan = golongan::FindOrFail($id);
    
        $data = [
            'id' =>$request->id,
            'namagolongan' =>$request->namagolongan,
            'delstatus' => 1,
        ];
    
        $golongan->update($data);
        return redirect('golongan');
    }

    public function destroy($id){
        $golongan = golongan::FindOrFail($id);
        $golongan->delete();
        return redirect('golongan');
    }
}
