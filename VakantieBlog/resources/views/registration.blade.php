<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    @vite('resources/css/app.css')
    @extends('layouts.header')
</head>
<body class="font-sans">
        @section('content')
    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Registreren</h2>
        </div>
        <div class="mx-auto">
            <form action="{{ route('sample.validate_registration') }}" method="POST" class="flex flex-col" >
                @csrf
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="email" name="email" placeholder="E-mailadres" ><br>
                @if($errors->has('email'))
                    <span id="text-danger">{{ $errors->first('email')}}</span>
                    @endif
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="text" name="name" placeholder="Gebruikersnaam" ><br>
                @if($errors->has('name'))
                    <span id="text-danger">{{ $errors->first('name')}}</span><br>
                    @endif
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" name="password" placeholder="Wachtwoord" ><br>
                @if($errors->has('password'))
                    <span id="text-danger">{{ $errors->first('password')}}</span>
                    @endif
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Registreren">
            </form>
        </div>
    </div>
    @endsection

</body>
</html>