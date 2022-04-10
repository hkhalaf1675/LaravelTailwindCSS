@extends('layouts.Main')

@section('content')

    <h1 class=" mt-5 text-center font-bold font-serif text-4xl">تسجيل الدخول</h1>
    <div class="mx-auto grid m-3.5 max-w-md font-bold">
        <form method="post" action=""class="justify-items-center text-center rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
            <label>
                <span class="block pb-2">User Name</span>
                <input name="username" type="text" placeholder="username" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                <span class="block pb-2">Password</span>
                <input name="password" type="password" placeholder="password" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                <input type="submit" value="Login" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
            </label>
        </form>
    </div>

@endsection