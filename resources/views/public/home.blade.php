@extends('layouts.Main')

@section('content')
        <div class="m-3 p-3">
            <h1 class="text-center font-bold font-serif text-4xl">المواد</h1>
            <ul class="text-center m-4 text-xl font-mono">
                @foreach($subjects as $subject)
                    <?php
                        $lessonscount = DB::table('lessons')->where('sub_id',$subject->sub_id)->count();
                    ?>
                    <li class="rounded-3xl flex justify-between px-7 justify-items-center bg-gray-200 p-5 m-7 shadow-xl opacity-75 shadow-gray-400">
                        <span class="rounded-2xl border-2 p-3 border-lime-600">{{$lessonscount}}</span>
                        <a href="subject/{{$subject->sub_id}}" class="p-3">{{ $subject->subname }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
@endsection