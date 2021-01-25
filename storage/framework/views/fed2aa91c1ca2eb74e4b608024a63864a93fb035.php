<?php $__env->startSection('content'); ?>
<div class="flex justify-center mb-5">
    <?php if(Session::get('success')): ?>
    <div class="text-green-500 mt-2 text-sm">
        <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>
</div>

    <div class="flex justify-center mt-5 mb-5">

        <div class="w-8/12 bg-white p-6 rounded-lg">

            <div>
                <div class="md:grid md:grid-cols-6 md:gap-6 item-center">
                    <div class="md:col-span-3">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 class="text-lg leading-6 font-medium text-gray-900">
                            Services
                            </h2>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Company Services.
                            </p>
                        </div>
                    </div>
                    <div class="md:col-span-3">
                        <div class="px-4 py-5 sm:px-6">
                            <div class=" md:flex items-center justify-end">
                                <a href="<?php echo e(route('services.add')); ?>" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                    Add Service
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            image
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <span class="sr-only">delete</span>
                        </th>
                        </tr>
                    </thead>
                    <?php if($services->count()): ?>
                        <tbody class="bg-white divide-y divide-gray-500">
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="h-50 w-40 px-2 inline-flex text-md leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    <img src="<?php echo e($service->image); ?>" alt="<?php echo e($service->title); ?>">
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo e($service->title); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <a href="<?php echo e(route('service', $service)); ?>">Edit</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">
                                <form action="<?php echo e(route('service', $service)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    <?php else: ?>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">No Data </td>
                            </tr>
                        </tbody>
                    <?php endif; ?>
                    </table>
                </div>
                </div>
            </div>
            </div>

        </div>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tarek wagih\Documents\GitHub\posty\resources\views/admin/services.blade.php ENDPATH**/ ?>