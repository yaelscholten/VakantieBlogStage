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
        <?php $__env->startSection('content'); ?>
    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Registreren</h2>
        </div>
        <div class="mx-auto">
            <form action="<?php echo e(route('sample.validate_registration')); ?>" method="POST" class="flex flex-col" >
                <?php echo csrf_field(); ?>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="email" name="email" placeholder="E-mailadres" ><br>
                <?php if($errors->has('email')): ?>
                    <span id="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="text" name="name" placeholder="Gebruikersnaam" ><br>
                <?php if($errors->has('name')): ?>
                    <span id="text-danger"><?php echo e($errors->first('name')); ?></span><br>
                    <?php endif; ?>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-8" type="password" name="password" placeholder="Wachtwoord" ><br>
                <?php if($errors->has('password')): ?>
                    <span id="text-danger"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Registreren">
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/registration.blade.php ENDPATH**/ ?>