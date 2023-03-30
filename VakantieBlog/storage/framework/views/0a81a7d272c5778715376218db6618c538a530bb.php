<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        
        </style>
    </head>
    <body>
        <?php $__env->startSection('content'); ?>

        <!-- <div class="w-7/12 h-auto mx-auto flex my-20 justify-between">
            <div class="w-6/12">
                <h1 class="text-3xl font-bold">Lorem ipsum dolor sit amet</h1>
                <p class="text-slate-400 text-xl my-2">28-01-2023</p>
                <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis augue sem, vitae tempor lorem iaculis quis. Aliquam vestibulum eleifend risus nec ornare. Sed mollis ante eget accumsan lacinia. </p>
                <button class="py-3 px-14 bg-[#274060] mt-4 text-white">Verder lezen</button>
            </div>
            <div>
                <img width="450" src="https://www.veldsink.nl/wp-content/uploads/2018/09/Vakantie-strandstoelen-1280x853.jpg">
            </div>
        </div> -->


        <?php $__env->stopSection(); ?>

    </div>
    
    </body>
</html>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/index.blade.php ENDPATH**/ ?>