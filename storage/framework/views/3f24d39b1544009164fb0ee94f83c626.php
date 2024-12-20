
<?php $__env->startSection('title', 'Category Workshop Offline'); ?>
<?php $__env->startSection('content'); ?>
    <div class="h-[112px]">
        <?php if (isset($component)) { $__componentOriginalff09156f73c896030ee75284e9b2c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff09156f73c896030ee75284e9b2c466 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $attributes = $__attributesOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__attributesOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $component = $__componentOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__componentOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
    </div>
    <section id="Category" class="w-full max-w-[1280px] mx-auto px-[52px] mt-[52px] mb-[100px]">
        <div class="flex flex-col gap-9">
            <div class="flex flex-col items-center gap-1">
                <h1 class="font-Neue-Plak-bold text-[32px] leading-[44.54px] capitalize"><?php echo e($category->name); ?> (<?php echo e($category->workshops->count()); ?>)</h1>
                <div class="flex items-center gap-2 ">
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Homepage</a>
                    <span>></span>
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Category Workshop</a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <?php $__empty_1 = true; $__currentLoopData = $category->workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemNewWorkshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('front.details', $itemNewWorkshop->slug)); ?>" class="card">
                        <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-9 bg-white">
                            <div class="flex flex-col gap-[18px]">
                                <div class="flex items-center gap-3">
                                    <div class="w-16 h-16 rounded-full flex shrink-0 overflow-hidden">
                                        <img src="<?php echo e(Storage::url($itemNewWorkshop->instructor->avatar)); ?>"
                                            class="w-full h-full object-cover" alt="avatar">
                                    </div>
                                    <div class="flex flex-col gap-[2px]">
                                        <p class="font-semibold text-lg leading-[27px]">
                                            <?php echo e($itemNewWorkshop->instructor->name); ?></p>
                                        <p class="font-medium text-aktiv-grey">
                                            <?php echo e($itemNewWorkshop->instructor->occupation); ?></p>
                                    </div>
                                </div>
                                <div class="thumbnail-container relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                    <img src="<?php echo e(Storage::url($itemNewWorkshop->thumbnail)); ?>"
                                        class="w-full h-full object-cover" alt="thumbnail">
                                    <?php if($itemNewWorkshop->is_open): ?>
                                        <?php if($itemNewWorkshop->has_started): ?>
                                            <div
                                                class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-orange text-white z-10">
                                                <img src="<?php echo e(asset('assets/images/icons/timer-start.svg')); ?>"
                                                    class="w-6 h-6" alt="icon">
                                                <span class="font-semibold">STARTED</span>
                                            </div>
                                        <?php else: ?>
                                            <div
                                                class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-green text-white z-10">
                                                <img src="<?php echo e(asset('assets/images/icons/medal-star.svg')); ?>" class="w-6 h-6"
                                                    alt="icon">
                                                <span class="font-semibold">OPEN</span>
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div
                                            class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-red text-white z-10">
                                            <img src="<?php echo e(asset('assets/images/icons/sand-timer.svg')); ?>" class="w-6 h-6"
                                                alt="icon">
                                            <span class="font-semibold">CLOSED</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-detail flex flex-col gap-2">
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <img src="<?php echo e(asset('assets/images/icons/calendar-2.svg')); ?>"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <span
                                                class="font-medium text-aktiv-grey"><?php echo e($itemNewWorkshop->started_at->format('M d, Y')); ?></span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <img src="<?php echo e(asset('assets/images/icons/timer.svg')); ?>"
                                                class="w-6 h-6 flex shrink-0" alt="icon">
                                            <span
                                                class="font-medium text-aktiv-grey"><?php echo e($itemNewWorkshop->time_at->format('h:i A')); ?></span>
                                        </div>
                                    </div>
                                    <h3 class="title min-h-[56px] font-semibold text-xl line-clamp-2 hover:line-clamp-none">
                                        <?php echo e($itemNewWorkshop->name); ?></h3>
                                    <p class="font-medium text-aktiv-grey"><?php echo e($itemNewWorkshop->category->name); ?></p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-[6px]">
                                    <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp
                                        <?php echo e(number_format($itemNewWorkshop->price, 0, ',', '.')); ?></p>
                                    <p class="font-medium text-aktiv-grey">/person</p>
                                </div>
                                <img src="<?php echo e(asset('assets/images/icons/arrow-right.svg')); ?>"
                                    class="w-12 h-12 flex shrink-0" alt="icon">
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>belum ada data workshop terbaru</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <footer class="w-full p-[52px] bg-white">
        <div class="flex flex-col w-full max-w-[1176px] mx-auto gap-8">
            <div class="flex flex-col items-center gap-4">
                <img src="<?php echo e(asset('assets/images/logos/Logo-blue.svg')); ?>" class="h-10" alt="logo">
                <p class="font-medium text-aktiv-grey">Ipsum is a company engaged in offline education.</p>
            </div>
            <hr class="border-[#E6E7EB]">
            <div class="grid grid-cols-3 items-center">
                <p class="flex font-medium text-aktiv-grey">© 2024 Workflow Copyright</p>
                <ul class="flex items-center justify-center gap-6">
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Workshop</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Community</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Testimony</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">About Us</a>
                    </li>
                </ul>
                <ul class="flex items-center justify-end gap-6">
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Instagram</a>
                    </li>
                    <li
                        class="font-medium text-aktiv-grey text-nowrap hover:font-semibold hover:text-aktiv-orange transition-all duration-300">
                        <a href="#">Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ticketing\resources\views/front/category.blade.php ENDPATH**/ ?>