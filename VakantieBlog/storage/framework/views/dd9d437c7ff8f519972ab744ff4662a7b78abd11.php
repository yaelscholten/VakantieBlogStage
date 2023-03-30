<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerken</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    
</head>
<body class="font-sans">
        <?php $__env->startSection('content'); ?>

    <div class="w-2/6 h-screen mx-auto flex flex-col">
        <div class="text-4xl mx-auto mt-16 mb-20">
            <h2>Bewerk blog</h2>
        </div>
        <div class="mx-auto pb-10">
            <form action="/blog/<?php echo e($post->slug); ?>" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label class="text-3xl text-center inline-block w-72 mb-4">Titel</label><br>
                <input class="bg-[#274060] w-72 h-12 pl-3 text-white drop-shadow-xl" type="text" name="title" value="<?php echo e($post->title); ?>"><br>

                <label class="text-3xl text-center inline-block w-72 mb-4 mt-12">Bericht</label><br>
                <textarea class="bg-[#274060] w-96 h-60 pt-3 pl-3 text-white drop-shadow-xl" name="description"><?php echo e($post->description); ?></textarea><br>

                <input class="bg-[#274060] text-white rounded-3xl w-72 h-12 mt-12 text-xl" type="submit" value="Blog bewerken!">
            </form>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yaels\VakantieBlogStage\VakantieBlog\resources\views/blog/edit.blade.php ENDPATH**/ ?>