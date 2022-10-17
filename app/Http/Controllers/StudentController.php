<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function get_all_student(){
        $data = Student::get();
        return view('student_manage',compact('data'));
    }

    public function create(){
        return view('student_create');
    }

    public function save( Request $request ){
        $request->validate([
            'fullname' => 'required',
            'birthday' => 'required',
            'address' => 'required',
        ]);
        $fullname = $request->fullname;
        $birthday = $request->birthday;
        $address = $request->address;

        $stu = new Student();
        $stu->fullname = $fullname;
        $stu->birthday = $birthday;
        $stu->address = $address;
        $stu->save();
        return redirect()->back()->with('success','Add Success !');
    }


    public function get_student_by_id($id){
        $data = Student::where('id',$id)->first();
        return view('student_view',compact('data'));
    }


    public function edit($id){
        $data = Student::where('id',$id)->first();
        return view('student_edit',compact('data'));
    }

   
    public function update(Request $request){
        $request->validate([
            'fullname' => 'required',
            'birthday' => 'required',
            'address' => 'required',
        ]);

        $id = $request->id;
        $fullname = $request->fullname;
        $birthday = $request->birthday;
        $address = $request->address;

        Student::where('id','=',$id)->update([
            'fullname'=>$fullname,
            'birthday'=>$birthday,
            'address'=>$address,
        ]);
        return redirect()->back()->with('success','Update success !');
    }


    public function delete($id){
        Student::where('id' ,'=', $id)->delete();
        return redirect()->back()->with('success','Delete success !');

    }
}
