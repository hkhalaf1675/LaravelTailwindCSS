@extends('layouts.Main')

@section('content')

        <div class="m-3 p-3">
            <h1 class="text-center font-bold font-serif text-4xl">
                @foreach($subjects as $subject)
                    {{ $subject->subname }}
                @endforeach
            </h1>
            <ul class="text-center m-4 text-xl font-mono">
                @foreach($lessons as $lesson)
                    <li class="rounded-3xl text-right p-7 bg-gray-200 p-5 m-7 shadow-xl opacity-75 shadow-gray-400">
                        <a href="/lesson/{{$lesson->lesson_id}}" class="p-3">{{ $lesson->lessonname }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

@endsection