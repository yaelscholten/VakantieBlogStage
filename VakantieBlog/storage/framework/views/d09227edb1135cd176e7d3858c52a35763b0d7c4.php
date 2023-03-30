<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>
    <body>
    <header class="bg-[#274060] h-20 flex">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <div class="">
            <a href="<?php echo e(url('/blog')); ?>"><img class="h-16 " src="<?php echo e(asset('images/logo.webp')); ?>" alt="Logo"></a>
            </div>
            <div class="">
                <ul class="flex justify-between text-white text-lg ">
                    <li><a class="px-4" href="<?php echo e(url('/blog')); ?>">Home</a></li>
                    <?php if(auth()->guard()->guest()): ?>     
                        <li><a class="px-4" href="<?php echo e(url('login')); ?>">Aanmelden</a></li>
                    <?php else: ?>
                    <li><a class="px-4" href="<?php echo e(url('account')); ?>">Mijn account</a></li>
                    <li><a class="px-4" href="<?php echo e(url('logout')); ?>">Loguit</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>
    <div>
    <?php echo $__env->yieldContent('content'); ?>

    </div>
    
    </body>
</html>
<?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/layouts/header.blade.php ENDPATH**/ ?>