<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="font-sans">
    <header class="bg-[#274060] h-20 flex">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <div class="">
                <img class="h-16 " src="<?php echo e(asset('images/logo.webp')); ?>" alt="Logo"> 
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
            <h2>Registreren</h2>
        </div>
        <div class="mx-auto">
            <form action="#" class="">
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="email" id="email" name="email" placeholder="E-mailadres" required><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="text" id="volnaam" name="volnaam" placeholder="Volledige naam" required><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="text" id="gebdatum" name="gebdatum" placeholder="Geboorte datum" onfocus="(this.type='date')" required><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="text" id="gebnaam" name="gebnaam" placeholder="Gebruikersnaam" required><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord" required><br>
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Registreren">
            </form>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/auth/registration.blade.php ENDPATH**/ ?>