
<?php $__env->startSection('title'); ?>
    Details<?php echo e($workshop->name); ?>

<?php $__env->stopSection(); ?>
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
    <div id="background" class="relative w-full">
        <div class="absolute w-full h-[300px] bg-[linear-gradient(0deg,#4EB6F5_0%,#5B8CE9_100%)] -z-10"></div>
    </div>
    <section id="Category" class="w-full max-w-[1280px] mx-auto px-[52px] mt-16 mb-[100px]">
        <div class="flex flex-col gap-16">
            <div class="flex flex-col items-center gap-1">
                <p class="font-bold text-[32px] leading-[48px] capitalize text-white">Workshop Details</p>
                <div class="flex items-center gap-2 text-white">
                    <a class="last:font-semibold">Homepage</a>
                    <span>></span>
                    <a class="last:font-semibold">Workshop Details</a>
                </div>
            </div>
            <main class="flex gap-8">
                <section id="Details" class="flex flex-col w-[724px] rounded-2xl gap-8 p-8 bg-white">
                    <div id="Thumbnail" class="relative flex w-full h-[369px] rounded-2xl overflow-hidden bg-[#D9D9D9]">
                        <img src="<?php echo e(Storage::url($workshop->thumbnail)); ?>" class="w-full h-full object-cover"
                            alt="thumbnail">
                        <?php if($workshop->is_open): ?>
                            <?php if($workshop->has_started): ?>
                                <div
                                    class="absolute top-3 left-3 flex items-center rounded-full py-3 px-5 gap-1 bg-aktiv-orange text-white z-10">
                                    <img src="<?php echo e(asset('assets/images/icons/timer-start.svg')); ?>" class="w-6 h-6"
                                        alt="icon">
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
                                <img src="assets/images/icons/sand-timer.svg" class="w-6 h-6" alt="icon">
                                <span class="font-semibold">CLOSED</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <section id="Header" class="flex flex-col gap-6">
                        <div id="Rating" class="flex items-center gap-4">
                            <div
                                class="flex items-center rounded-md border border-aktiv-green py-2 px-3 gap-[5px] bg-aktiv-green/[9%]">
                                <img src="<?php echo e(asset('assets/images/icons/format-circle.svg')); ?>"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <p class="font-medium text-aktiv-green capitalize"><?php echo e($workshop->category->name); ?></p>
                            </div>
                            <div class="flex items-center gap-1">
                                <div class="flex items-center">
                                    <img src="<?php echo e(asset('assets/images/icons/Star 1.svg')); ?>" class="p-[4px] w-6 h-6"
                                        alt="star">
                                    <img src="<?php echo e(asset('assets/images/icons/Star 1.svg')); ?>" class="p-[4px] w-6 h-6"
                                        alt="star">
                                    <img src="<?php echo e(asset('assets/images/icons/Star 1.svg')); ?>" class="p-[4px] w-6 h-6"
                                        alt="star">
                                    <img src="<?php echo e(asset('assets/images/icons/Star 1.svg')); ?>" class="p-[4px] w-6 h-6"
                                        alt="star">
                                    <img src="<?php echo e(asset('assets/images/icons/Star 1.svg')); ?>" class="p-[4px] w-6 h-6"
                                        alt="star">
                                </div>
                                <p class="font-semibold text-lg leading-[27px]">4.5 <span
                                        class="font-medium text-aktiv-grey">(3250 Reviews)</span></p>
                            </div>
                        </div>
                        <div id="Title" class="flex flex-col gap-3">
                            <h1 class="font-Neue-Plak-bold text-2xl leading-[33.6px] capitalize"><?php echo e($workshop->name); ?></h1>
                            <div class="grid grid-cols-2 gap-6">
                                <div
                                    class="flex items-center justify-between rounded-2xl border border-[#E6E7EB] p-5 gap-4 bg-white">
                                    <div class="flex flex-col gap-2">
                                        <p class="font-medium text-aktiv-grey">Start from</p>
                                        <p class="font-semibold text-lg leading-[27px]"><?php echo e($workshop->time_at->format('h:i A')); ?></p>
                                    </div>
                                    <img src="<?php echo e(asset('assets/images/icons/Duration.png')); ?>"
                                        class="w-16 h-16 flex shrink-0" alt="icon">
                                </div>
                                <div
                                    class="flex items-center justify-between rounded-2xl border border-[#E6E7EB] p-5 gap-4 bg-white">
                                    <div class="flex flex-col gap-2">
                                        <p class="font-medium text-aktiv-grey">Kick off date</p>
                                        <p class="font-semibold text-lg leading-[27px]"><?php echo e($workshop->started_at->format('M d, Y')); ?></p>
                                    </div>
                                    <img src="<?php echo e(asset('assets/images/icons/Kick off date.png')); ?>"
                                        class="w-16 h-16 flex shrink-0" alt="icon">
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="Descriptions" class="flex flex-col gap-4">
                        <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Descriptions</h2>
                        <p class="group relative font-medium leading-[28.8px] text-aktiv-grey">
                            <span class="line-clamp-4 group-has-[:checked]:line-clamp-none"><?php echo e($workshop->about); ?></span>
                            <label class="group absolute bottom-0 right-0 z-10 bg-white has-[:checked]:relative">
                                <input type="checkbox" class="peer hidden">
                                <span
                                    class="pr-52 before:content-['..._'] after:font-semibold after:text-aktiv-blue after:content-['Read_More...'] group-has-[:checked]:pr-0 group-has-[:checked]:after:content-['See_Less'] group-has-[:checked]:before:content-['']"></span>
                            </label>
                        </p>
                    </div>
                    <div id="Location" class="flex flex-col gap-4">
                        <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Location Details</h2>
                        <div class="relative flex w-full h-[360px] rounded-2xl overflow-hidden bg-[#D9D9D9]">
                            <div
                                class="absolute left-5 top-1/2 transform -translate-y-1/2 flex flex-col w-[260px] h-fit max-h-[320px] gap-4 rounded-2xl p-5 bg-white">
                                <div class="flex w-full h-[124px] rounded-xl overflow-hidden">
                                    <img src="<?php echo e(Storage::url($workshop->venue_thumbnail)); ?>"
                                        class="w-full h-full object-cover" alt="location">
                                </div>
                                <div class="flex flex-col gap-3 justify-between">
                                    <p class="font-medium leading-[25.6px] text-aktiv-grey line-clamp-4"><?php echo e($workshop->address); ?></p>
                                    <a href="https://www.google.com/maps/place/<?php echo e($workshop->address); ?>" class="font-semibold text-aktiv-orange">View in Google Maps</a>
                                </div>
                            </div>
                            <img src="<?php echo e(Storage::url($workshop->bg_map)); ?>"
                                class="w-full h-full object-cover" alt="maps">
                        </div>
                    </div>
                </section>
                <section id="Sidebar" class="flex flex-col w-[420px] gap-8">
                    <div class="flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Instructor Details</h2>
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 shrink-0 rounded-full overflow-hidden bg-[#D9D9D9]">
                                <img src="<?php echo e(Storage::url($workshop->instructor->avatar)); ?>"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <div class="flex flex-col gap-[2px] flex-1">
                                <p class="font-semibold text-lg leading-[27px]"><?php echo e($workshop->instructor->name); ?></p>
                                <p class="font-medium text-aktiv-grey"><?php echo e($workshop->instructor->occupation); ?></p>
                            </div>
                            <img src="<?php echo e(asset('assets/images/icons/verify.svg')); ?>"
                                class="flex w-[62px] h-[62px] shrink-0" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col rounded-3xl pt-8 gap-6 bg-white">
                        <div class="flex flex-col mx-8 gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">Workshop Price</h2>
                            <div class="flex items-center gap-[6px]">
                                <p class="font-bold text-[32px] leading-[48px] text-aktiv-red">Rp
                                    <?php echo e(number_format($workshop->price, 0, ',', '.')); ?></p>
                                <p class="font-semibold text-aktiv-grey">/person</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-between mx-8 rounded-2xl border border-r-2 border-b-2 border-[#E6E7EB] py-4 px-6 gap-2">
                            <div class="flex flex-col gap-1">
                                <p class="font-medium text-aktiv-grey">Total Attendants:</p>
                                <p class="font-semibold text-lg leading-[27px]"><?php echo e($workshop->participants->count()); ?> Has People Joined</p>
                            </div>
                            <img src="<?php echo e(asset('assets/images/icons/user-2.svg')); ?>" class="w-[56px] h-[56px]"
                                alt="icon">
                        </div>
                        <div class="flex flex-col mx-8 gap-4">
                            <h2 class="font-Neue-Plak-bold text-xl leading-[27.5px]">This workshop will teach</h2>
                            <div class="flex flex-col gap-6">
                                <?php $__empty_1 = true; $__currentLoopData = $workshop->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemBenefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    
                                    <div class="flex items-center gap-2">
                                        <img src="<?php echo e(asset('assets/images/icons/tick-circle.svg')); ?>"
                                            class="w-6 h-6 flex shrink-0" alt="icon">
                                        <p class="font-semibold text-lg leading-[27px]"><?php echo e($itemBenefit->name); ?></p>
                                    </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>belum ada data benefits</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <a href="booking.html"
                                class="flex items-center justify-center mx-8 h-16 rounded-xl px-6 gap-[10px] bg-aktiv-orange font-semibold text-lg leading-[27px] text-white mb-8">Join
                                Workshop</a>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ticketing\resources\views/front/details.blade.php ENDPATH**/ ?>