<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Classs;
use App\Grade;

class StudentController extends Controller
{
    public function getStudent_Info_Page(){
        return view('student_info1');
    }

    public  function postStudentID(Request $request){
        $student_id=$request->MSHS;
        return redirect()->route('getStudentInfo', ['id' => $student_id]);

    }

    public function getStudent($id){
        $student_arr=Student::where('id',$id)->get();
        $class_id=Student::where('id',$id)->pluck('class_id');
        $class=Classs::where('id',$class_id)->first();
        $grade_id=Classs::where('id',$class_id)->pluck('grade_id');
        $grade=Grade::where('id',$grade_id)->first();
        return view('student_info',['students'=>$student_arr,'grade'=>$grade,'class'=>$class]);
    }
}
