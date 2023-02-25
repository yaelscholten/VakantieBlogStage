<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verder lezen..</title>
    @vite('resources/css/app.css')
    @extends('layouts.header')
</head>
<body class="font-sans">
        @section('content')

    <div class="w-4/6 h-screen mx-auto flex flex-col">
        <div class="flex justify-center flex-col">
            <div class="text-4xl mx-auto mt-16 mb-20">
                <h2>{{$post->title}}</h2>
            </div>
            <div class="mx-auto pb-10">
                <span class="text-grey-500">
                    Gemaakt door <span class="font-bold text-gray-800">{{ 
                        $post->user->name}}</span>, {{date('jS M Y', strtotime
                            ($post->updated_at))}}</p> 
                </span>
                <div>
                    <img class="mt-3" width="450" src=" {{ asset('images/' . $post->image_path) }}">
                </div>
            </div>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-center">
                {{ $post->description}}
            </p>

        </div>

        @foreach($post->comments as $comment)
        <div class="mt-10 w-4/5 pb-20">
            <h1 class="text-lg">
            <b>{{$comment->user->name}} zegt:</b> <br>
                {{ $comment->comment}}</h1><br>
                <p class="text-gray-600">{{date('jS M Y', strtotime
                            ($comment->created_at))}}</p>
            @if(Auth::check() && Auth::id() == $comment->user_id)
            <div class="mt-6 flex w-52 justify-between">
                <a href="edit-comment/{{ $comment->id }}" class="bg-yellow-600 text-white py-3 px-5 rounded-3xl">Bewerk</a>
                <form action="delete/{{ $comment->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="bg-red-600 text-white py-3 px-5 rounded-3xl" type="submit">Verwijder</button>
                </form>
            </div>
            @endif
        </div>
        @endforeach
        @if (Auth::check())

        <div class="mt-10">
            <h1 class="text-2xl">Plaats een comment:</h1>
            <form action="{{ url('comments') }}" method="POST" class="mt-4 mb-12">
                @csrf
                <input type="hidden" name="post_slug" value="{{ $post->slug}}">
                <textarea name="comment" class="bg-[#f0f0f0] w-96 h-40"></textarea><br>

                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Plaats comment!">
            </form>
        </div>
        @endif
    </div>
    @endsection
</body>
</html>