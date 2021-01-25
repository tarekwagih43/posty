<?php $__env->startSection('content'); ?>

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <!-- Setting   -->
        <div>
            <div class="md:grid md:grid-cols-6 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Front-end information.
                    </p>
                    </div>
                </div>
                <?php if($config): ?>
                <div class="mt-5 md:mt-0 md:col-span-5">
                    <form action="<?php echo e(route('setting')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" id="id" value="<?php echo e($config->id); ?>">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        Site Name
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="website name" value="<?php echo e($config->name); ?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="address" class="block text-sm font-medium text-gray-700">
                                        Address
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="address" id="address" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company address" value="<?php echo e($config->address); ?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company email" value="<?php echo e($config->email); ?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">
                                        Phone
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="tel" name="phone" id="phone" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company phone" value="<?php echo e($config->phone); ?>">
                                    </div>
                                    </div>
                                </div>

                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                About
                                </label>
                                <div class="mt-1">
                                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="About"><?php echo e($config->about); ?></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                the about text will aber in about bage.
                                </p>
                            </div>
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <fieldset>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="register" name="register" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php if($config->register): ?>
                                                checked
                                                <?php endif; ?>>
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments" class="font-medium text-gray-700">Register</label>
                                                <p class="text-gray-500">Users Can Register If checked.</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php else: ?>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="<?php echo e(route('setting')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Site Name
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="website name" >
                                </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                <label for="address" class="block text-sm font-medium text-gray-700">
                                    Address
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="address" id="address" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company address" >
                                </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="email" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company email" >
                                </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                <label for="phone" class="block text-sm font-medium text-gray-700">
                                    Phone
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="tel" name="phone" id="phone" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-sm rounded-r-md sm:text-sm border-gray-300" placeholder="company phone">
                                </div>
                                </div>
                            </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                            About
                            </label>
                            <div class="mt-1">
                            <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="About"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                            the about text will aber in about bage.
                            </p>
                        </div>
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <fieldset>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="register" name="register" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-medium text-gray-700">Register</label>
                                            <p class="text-gray-500">Users Can Register If checked.</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                <?php endif; ?>

            </div>
        </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\tarek wagih\Documents\GitHub\posty\resources\views/admin/setting.blade.php ENDPATH**/ ?>