<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Classs;
use App\Student;
use App\Teacher;

class ClassController extends Controller{
    public function getGrade(){
        $grade=Grade::select('name')->pluck('name');

        return view('class_info',['data'=>$grade]);
    }

    public function getClass($grade){
        $grade_id=Grade::where('name',$grade)->pluck('id');
        $grade_arr=Grade::select('name')->pluck('name');
        $class_arr=Classs::where('grade_id',$grade_id)->pluck('name');

        return view('class_info1',['data'=>$grade,'data1'=>$grade_arr,'data2'=>$class_arr]);
    }

    public function getListStudent($grade,$class){
        $grade_id=Grade::where('name',$grade)->pluck('id');
        $class_id=Classs::where('name',$class)->pluck('id');
        $grade_arr=Grade::select('name')->pluck('name');
        $class_arr=Classs::where('grade_id',$grade_id)->pluck('name');

        $student_arr=Student::where('class_id',$class_id)->get();
        $teacher_name=Teacher::where('class_id',$class_id)->first();

        $count=Student::where('class_id',$class_id)->count();

        return view('class_info2',['data'=>$grade,'data1'=>$class,'data2'=>$grade_arr,'data3'=>$class_arr,'students'=>$student_arr,'teacher'=>$teacher_name,'count'=>$count]);
    }
}
