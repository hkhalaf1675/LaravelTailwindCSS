<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function home(){
        $subjects = DB::select('select * from subjects');

        return view('public.home',compact('subjects'));
    }

    public function subject($sub_id){
        $lessons = DB::select('select * from lessons where sub_id = ?',[$sub_id]);
        $subjects = DB::select('select * from subjects where sub_id = ?',[$sub_id]);

        return view('public.subject',compact('lessons','subjects'));
    }

    public function lesson($lesson_id){
        $lessons = DB::select('select * from lessons where lesson_id = ?',[$lesson_id]);

        return view('public.showfile',compact('lessons'));
    }

    public function login(){

        return view('admin.login');
    }
}
