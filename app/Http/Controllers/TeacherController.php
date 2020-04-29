<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Classs;

class TeacherController extends Controller
{
    public function getTeacher_Info_Page(){
        return view('teacher_info1');
    }

    public  function postTeacherID(Request $request){
            $teacher_id = $request->MSGV;
        return redirect()->route('getTeacherInfo', ['id' => $teacher_id]);
    }

    public function getTeacher($id){
        $teacher_arr=Teacher::where('id',$id)->get();
        $class_id=Teacher::where('id',$id)->pluck('class_id');
        $class=Classs::where('id',$class_id)->first();

        return view('teacher_info',['teachers'=>$teacher_arr,'class'=>$class]);
    }
}
