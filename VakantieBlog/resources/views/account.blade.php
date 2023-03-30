<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    @vite('resources/css/app.css')
    @extends('layouts.header')
</head>
<body class="font-sans">
        @section('content')

    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Mijn account</h2>
        </div>
        <div class="mx-auto">
            <form action="{{ route('update-account')}}" method="post" class="">
                @csrf
                @method('PUT')

                <label class="text-lg" value="">E-mailadres</label><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-2 mb-8" type="text" name="email" value="{{$user->email}}"><br>
                <label class="text-lg">Gebruikersnaam</label><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="text" name="name" value="{{$user->name}}"><br>
   
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Opslaan" >

            </form>
        </div>
    </div>
    @endsection

</body>
</html>