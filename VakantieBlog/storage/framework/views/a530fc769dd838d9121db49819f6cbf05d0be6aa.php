<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
</head>
<body class="font-sans">
        <?php $__env->startSection('content'); ?>

    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Mijn account</h2>
        </div>
        <div class="mx-auto">
            <form action="<?php echo e(route('update-account')); ?>" method="post" class="">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <label class="text-lg" value="">E-mailadres</label><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3 mt-2 mb-8" type="text" name="email" value="<?php echo e($user->email); ?>"><br>
                <label class="text-lg">Gebruikersnaam</label><br>
                <input class="bg-[#D9D9D9] w-72 h-12 pl-3" type="text" name="name" value="<?php echo e($user->name); ?>"><br>
   
                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Opslaan" >

            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

</body>
</html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/account.blade.php ENDPATH**/ ?>