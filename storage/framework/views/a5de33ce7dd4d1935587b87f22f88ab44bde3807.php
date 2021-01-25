<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

</head>
<body class="bg-gray-200">

    <!-- Navbar -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                <h1 class="text-white text-lg font-bold"> Tour Guide </h1>
                </div>
                <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="<?php echo e(route('/')); ?>" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="<?php echo e(route('about')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="<?php echo e(route('services')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="<?php echo e(route('contact')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
                </div>
            </div>
            <div class="flex item-center sm:items-stretch">
                <?php if(auth()->user()): ?>
                <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"><?php echo e(auth()->user()->name); ?></a>
                <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="p-3 inline text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Logout</button>
                </form>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="<?php echo e(route('register')); ?>" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldContent('script'); ?>
    <!-- Footer -->
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <p class="ml-3 font-small text-white truncate">
                        <span class="md:hidden">
                            All Rights Resarved &#174; Tour Guide
                        </span>
                        <span class="hidden md:inline">
                            All Rights Resarved &#174; Tour Guide
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\Users\tarek wagih\Documents\GitHub\posty\resources\views/layouts/app.blade.php ENDPATH**/ ?>