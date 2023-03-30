<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verder lezen..</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
</head>
<body class="font-sans">
        <?php $__env->startSection('content'); ?>

    <div class="w-4/6 h-screen mx-auto flex flex-col">
        <div class="flex justify-center flex-col">
            <div class="text-4xl mx-auto mt-16 mb-20">
                <h2><?php echo e($post->title); ?></h2>
            </div>
            <div class="mx-auto pb-10">
                <span class="text-grey-500">
                    Gemaakt door <span class="font-bold text-gray-800"><?php echo e($post->user->name); ?></span>, <?php echo e(date('jS M Y', strtotime
                            ($post->updated_at))); ?></p> 
                </span>
                <div>
                    <img class="mt-3" width="450" src=" <?php echo e(asset('images/' . $post->image_path)); ?>">
                </div>
            </div>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light text-center">
                <?php echo e($post->description); ?>

            </p>

        </div>

        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="mt-10 w-4/5 pb-20">
            <h1 class="text-lg">
            <b><?php echo e($comment->user->name); ?> zegt:</b> <br>
                <?php echo e($comment->comment); ?></h1><br>
                <p class="text-gray-600"><?php echo e(date('jS M Y', strtotime
                            ($comment->created_at))); ?></p>
            <?php if(Auth::check() && Auth::id() == $comment->user_id): ?>
            <div class="mt-6 flex w-52 justify-between">
                <a href="edit-comment/<?php echo e($comment->id); ?>" class="bg-yellow-600 text-white py-3 px-5 rounded-3xl">Bewerk</a>
                <form action="delete/<?php echo e($comment->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button class="bg-red-600 text-white py-3 px-5 rounded-3xl" type="submit">Verwijder</button>
                </form>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::check()): ?>

        <div class="mt-10">
            <h1 class="text-2xl">Plaats een comment:</h1>
            <form action="<?php echo e(url('comments')); ?>" method="POST" class="mt-4 mb-12">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="post_slug" value="<?php echo e($post->slug); ?>">
                <textarea name="comment" class="bg-[#f0f0f0] w-96 h-40"></textarea><br>

                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Plaats comment!">
            </form>
        </div>
        <?php endif; ?>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/blog/show.blade.php ENDPATH**/ ?>