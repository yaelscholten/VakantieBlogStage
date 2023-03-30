<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="font-sans">
    <header class="bg-[#274060] h-20 flex">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <div class="">
                <a href="<?php echo e(url('home')); ?>"><img class="h-16 " src="<?php echo e(asset('images/logo.webp')); ?>" alt="Logo"></a>
            </div>
            <div class="w-2/6">
                <ul class="flex justify-between text-white text-lg">
                    <li><a href="<?php echo e(url('')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('blogMaken')); ?>">Blog maken</a></li>
                    <li><a href="<?php echo e(url('mijnBlogs')); ?>">Mijn blogs</a></li>
                    <li><a href="<?php echo e(url('login')); ?>">Mijn account</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Aanmelden</h2>
        </div>
        <div class="mx-auto">
            <form action="#" class="">
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="text" id="gnaam" name="gnaam" placeholder="Gebruikersnaam of e-mailadres"><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br>
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Aanmelden">
            </form>
            <div class="flex mt-16 items-center">
                <div class="h-px w-28 bg-[#000000]"></div><h1 class="px-4">OF</h1><div class="h-px w-28 bg-[#000000]"></div>
            </div>
            <p class="mx-auto mt-4">Geen account? <a class="text-[#274060] underline underline-offset-2" href="<?php echo e(url('registration')); ?>"> Registreer je dan hier!</a></p>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/auth/login.blade.php ENDPATH**/ ?>