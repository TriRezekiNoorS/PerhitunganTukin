<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grade;
class GradeController extends Controller
{
    public function tampilHalamanGrade()
    {
        $grade = grade::all();

        return view('Data.grade',compact('grade'));
    }

    public function tampilInputGrade()
    {
        return view('Data.input_grade');
    }

    public function simpanGrade(Request $request){

        grade::create([
            'id' =>$request->id,
            'grade' =>$request->grade,
            'delstatus' => 1,
        ]);
        return redirect('grade');
    }

    public function ubahGrade($id){
        $grade=grade::findOrFail($id);
        return view('Data.edit-grade', compact('grade'));
    }
    
    public function SimpanPerubahanGrade(Request $request, $id){
    
        $grade = grade::FindOrFail($id);
    
        $data = [
            'id' =>$request->id,
            'grade' =>$request->grade,
            'delstatus' => 1,
        ];
    
        $grade->update($data);
        return redirect('grade');
    }



    public function destroy($id){
        $grade = grade::FindOrFail($id);
        $grade->delete();
        return redirect('grade');
    }
}
