<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    @extends('layouts.header')
</head>
<body class="font-sans">
        @section('content')

    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Aanmelden</h2>
        </div>
        <div class="mx-auto">
            <form action="{{ route('sample.validate_login') }}" method="post" class="">
                @csrf
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="text" name="email" placeholder="E-mailadres"><br>
                @if($errors->has('email'))
                    <span id="text-danger">{{ $errors->first('email')}}</span><br>
                @endif
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" name="password" placeholder="Wachtwoord"><br>
                @if($errors->has('password'))
                    <span id="text-danger">{{ $errors->first('password')}}</span><br>
                @endif
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Aanmelden">
            </form>
            <div class="flex mt-16 items-center">
                <div class="h-px w-28 bg-[#000000]"></div><h1 class="px-4">OF</h1><div class="h-px w-28 bg-[#000000]"></div>
            </div>
            <p class="mx-auto mt-4">Geen account? <a class="text-[#274060] underline underline-offset-2" href="{{ url('registration') }}"> Registreer je dan hier!</a></p>
        </div>
    </div>
    @endsection

</body>
</html>