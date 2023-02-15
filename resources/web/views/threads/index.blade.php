<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="container mx-auto py-5">
    <ul class="border border-gray-200 rounded overflow-hidden shadow-md mb-3">
        @foreach($threads as $thread)
            <li class="px-4 py-2 bg-white hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                <span class="mx-2 p-2 rounded bg-gray-200">{{$thread->title}}</span>
                Author : {{$thread->user->name}}
            </li>
        @endforeach
    </ul>
    {{$threads->links()}}
</div>
</body>
</html>
