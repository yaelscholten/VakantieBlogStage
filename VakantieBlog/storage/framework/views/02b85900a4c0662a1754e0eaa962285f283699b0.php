<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        
        </style>
    </head>
    <body>
        <?php $__env->startSection('content'); ?>

        
        <?php if(session()->has('message')): ?>
            <div class="w-7/12 m-auto mt-10">
                <p class="w-1/6 mb-4 mx text-center text-gray-50 bg-green-500 rounded-2xl py-4">
                    <?php echo e(session()->get('message')); ?>

                </p>
            </div>
        <?php endif; ?>


        <?php if(Auth::check()): ?>
        
            <div class="pt-15 w-7/12 mx-auto mt-10">
                <a href="/blog/create" class="bg-[#04151F] text-white py-3 px-5 rounded-3xl">Blog maken</a>
            </div>
        <?php endif; ?>

        <div class="pt-15 w-7/12 mx-auto mt-10">
            <form class="" type="get" action="<?php echo e(url('/search')); ?>">
                <input class="form-control w-full h-10 bg-[#F0F0F0] pl-4" type="search" placeholder="Zoeken..." name="search"></input>
            </form>
            
        </div>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="w-7/12 h-auto mx-auto flex my-20 justify-between">
            <div class="w-6/12">
                <h1 class="text-3xl font-bold"><?php echo e($post->title); ?></h1>
                <p class="text-slate-800 text-sm my-2">Gemaakt door: <b><?php echo e($post->user->name); ?></b>, <?php echo e(date('jS M Y', strtotime($post->updated_at))); ?></p>
                <p class="text-xl mb-5 text-ellipsis overflow-hidden whitespace-nowrap"><?php echo e($post->description); ?></p>
                <a href="/blog/<?php echo e($post->slug); ?>" class="py-3 px-14 bg-[#274060] mt-4 mb-10 text-white rounded-3xl">Verder lezen</a>
                <?php if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id): ?>
                <a href="/blog/<?php echo e($post->slug); ?>/edit" class="float-right mr-2">Bewerken</a>
                <form action="/blog/<?php echo e($post->slug); ?>" method="POST" class="float-right">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="text-red-500 pr-3" type="submit">Verwijder</button>
                </form>
                <?php endif; ?>
            </div>
            <div>
                <img width="450" src=" <?php echo e(asset('images/' . $post->image_path)); ?>">
            </div>
        </div>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       

        <?php $__env->stopSection(); ?>

    </div>
    
    </body>
</html>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/blog/index.blade.php ENDPATH**/ ?>