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
            <div class="">
            <ul class="flex justify-between text-white text-lg ">
                    <li><a class="px-4" href="<?php echo e(url('/')); ?>">Home</a></li>
                    
                    <?php if(auth()->guard()->guest()): ?>     
                        <li><a class="px-4" href="<?php echo e(url('login')); ?>">Aanmelden</a></li>
                    <?php else: ?>
                    <li><a class="px-4" href="<?php echo e(url('blogMaken')); ?>">Blog maken</a></li>
                    <li><a class="px-4" href="<?php echo e(url('mijnBlogs')); ?>">Mijn blogs</a></li>
                    <li><a class="px-4" href="<?php echo e(url('account')); ?>">Mijn account</a></li>
                    <li><a class="px-4" href="<?php echo e(url('logout')); ?>">Loguit</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>


</body>
</html><?php /**PATH C:\Users\yaels\VakantieBlog\resources\views/dashboard.blade.php ENDPATH**/ ?>