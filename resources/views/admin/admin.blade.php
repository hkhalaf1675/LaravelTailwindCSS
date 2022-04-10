@extends('layouts.Main')

@section('content')

<div class="m-3 p-3">
            <h1 class="text-center font-bold font-serif text-4xl">النظام</h1>

            <div class="grid justify-items-center ">
                <div class="m-auto justify-items-center text-center m-3.5 max-w-md font-bold">
                    <form action="{{ route('addsubject') }}" method="post" enctype="multipart/form-data" class=" rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
                    @csrf
                    <label>
                        <span class="block pb-2">إضافة مادة</span>
                        <input name="subname" type="text" placeholder="اسم المادة" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                        <input type="submit" value="إضافة" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
                    </label>
                    </form>
                </div>
                @if(session('success'))
                    <span class="text-center text-green font-bold">{!! session('success') !!}</span>
                @endif
                
                <div class="m-auto justify-items-center text-center   m-3.5 max-w-md font-bold">
                    <form action="{{ route('deletesubject') }}" method="post" enctype="multipart/form-data" class=" rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
                    @csrf
                    <label>
                        <span class="block pb-2">حذف مادة</span>
                        <select name="subname" class="p-3 my-2 rounded-2xl w-96 text-center bg-slate-300 ">
                            <option class="">أختر المادة</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->sub_id }}" class="">{{ $subject->subname }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="حذف" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
                    </label>
                    </form>
                </div>
            </div>

            <hr class=" border-slate-400 border-2 border-dashed" />

            <div class="grid justify-items-center ">
                <div class="m-auto justify-items-center text-center m-3.5 max-w-md font-bold">
                    <form action="{{ route('addlesson') }}" method="post" enctype="multipart/form-data" class=" rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
                    @csrf
                    <label>
                        <span class="block pb-2">إضافة درس</span>
                        <select name="subname" class="p-3 my-4 rounded-full w-96 text-center bg-slate-300 ">
                            <option class="">أختر المادة</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->sub_id }}" class="">{{ $subject->subname }}</option>
                            @endforeach
                        </select>
                        <input name="lessonname" type="text" placeholder="اسم الدرس" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                        <input name="file" type="file" placeholder="lfile src" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                        <input type="submit" value="إضافة" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
                    </label>
                    </form>
                </div>
                
                <div class="m-auto justify-items-center text-center   m-3.5 max-w-md font-bold">
                    <form action="{{ route('deletelesson') }}" method="post" enctype="multipart/form-data" class=" rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
                    @csrf
                    <label>
                        <span class="block pb-2">حذف درس</span>
                        <select name="subname" class="p-3 my-2 rounded-2xl w-96 text-center bg-slate-300 ">
                            <option class="">أختر المادة</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->sub_id }}" class="">{{ $subject->subname }}</option>
                            @endforeach
                        </select>
                        <select name="lessonname" class="p-3 my-2 rounded-2xl w-96 text-center bg-slate-300 ">
                            <option class="">أختر الدرس</option>
                            @foreach($subjects as $subject)
                                <option value="{{ $subject->sub_id }}" class="">{{ $subject->subname }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="حذف" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
                    </label>
                    </form>
                </div>
            </div>
        </div>

@endsection