<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="mx-auto grid  m-3.5 max-w-md font-bold">
        <form class="justify-items-center text-center rounded-xl border-slate-400 border-2 m-3.5 p-5 bg-slate-200 bg-clip-border">
            <label>
                <span class="block pb-2">User Name</span>
                <input name="username" type="text" placeholder="username" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                <span class="block pb-2">Password</span>
                <input name="password" type="password" placeholder="password" class="w-96 text-center block p-3 mb-2 rounded-full"/>
                <input type="submit" value="Login" class="font-bold w-60 mt-3 mb-2 rounded-full p-3 bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-violet-300" />
            </label>
        </form>
    </div>
</body>
</html>