<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;

class AdminController extends Controller
{
    public function AddSubject(Request $request){

        $subname = $request->subname;

        DB::insert('insert into subjects(sub_id,subname) values(null,"'.$subname.'") ');

        return redirect()->route('admin');
        
    }

    public function DeleteSubject(Request $request){

        $sub_id = $request->get('subname');

        DB::delete('delete from lessons where sub_id=?',[$sub_id]);
        DB::delete('delete from subjects where sub_id=?',[$sub_id]);

        return redirect()->route('admin');
    }

    public function AddLesson(Request $request){

        $lessonname = $request->lessonname;
        $sub_id = $request->subname;
        $file = $request->file;
        $file_name = $file->getClientOriginalName();
        $filesrc = Storage::path($file_name);
        $filesrc = str_replace("\\","\\\\",$filesrc);
        //$filesrc = Storage::url($file_name);
        //$filesrc = pathinfo($file_name);
        //$filesrc = $file->getRealPath();

        $file->move('assets',$lessonname);
        $destinationPath ='public/assets/'.$file_name;

        DB::insert('insert into lessons(lesson_id,lessonname,filesrc,sub_id) values(null,"'.$lessonname.'","'.$filesrc.'",'.$sub_id.');');

        return redirect()->route('admin');

    }

    public function DeleteLesson(){
        //
    }

    public function showadmin(){
        $subjects = DB::select("select * from subjects");
        $lessons = DB::select("select * from lessons");

        return view('admin.admin',compact('subjects','lessons'));
    }
}
