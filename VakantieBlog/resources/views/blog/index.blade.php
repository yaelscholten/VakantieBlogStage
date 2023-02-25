<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        @vite('resources/css/app.css')
        @extends('layouts.header')
        </style>
    </head>
    <body>
        @section('content')

        
        @if (session()->has('message'))
            <div class="w-7/12 m-auto mt-10">
                <p class="w-1/6 mb-4 mx text-center text-gray-50 bg-green-500 rounded-2xl py-4">
                    {{ session()->get('message')}}
                </p>
            </div>
        @endif


        @if (Auth::check())
        
            <div class="pt-15 w-7/12 mx-auto mt-10">
                <a href="/blog/create" class="bg-[#04151F] text-white py-3 px-5 rounded-3xl">Blog maken</a>
            </div>
        @endif

        <div class="pt-15 w-7/12 mx-auto mt-10">
            <form class="" type="get" action="{{ url('/search') }}">
                <input class="form-control w-full h-10 bg-[#F0F0F0] pl-4" type="search" placeholder="Zoeken..." name="search"></input>
            </form>
            
        </div>

        @foreach ($posts as $post)

        <div class="w-7/12 h-auto mx-auto flex my-20 justify-between">
            <div class="w-6/12">
                <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
                <p class="text-slate-800 text-sm my-2">Gemaakt door: <b>{{$post->user->name}}</b>, {{date('jS M Y', strtotime($post->updated_at))}}</p>
                <p class="text-xl mb-5 text-ellipsis overflow-hidden whitespace-nowrap">{{$post->description }}</p>
                <a href="/blog/{{ $post->slug }}" class="py-3 px-14 bg-[#274060] mt-4 mb-10 text-white rounded-3xl">Verder lezen</a>
                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <a href="/blog/{{ $post->slug }}/edit" class="float-right mr-2">Bewerken</a>
                <form action="/blog/{{ $post->slug }}" method="POST" class="float-right">
                    @csrf
                    @method('delete')
                    <button class="text-red-500 pr-3" type="submit">Verwijder</button>
                </form>
                @endif
            </div>
            <div>
                <img width="450" src=" {{ asset('images/' . $post->image_path) }}">
            </div>
        </div>



        @endforeach
       

        @endsection

    </div>
    
    </body>
</html>
