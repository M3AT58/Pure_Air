

<?php $__env->startSection('title', __('messages.our_services') . ' - بيور إير'); ?>
<?php $__env->startSection('meta_description', __('messages.services_meta_description')); ?>
<?php $__env->startSection('meta_keywords', __('messages.services_meta_keywords')); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3"><?php echo e(__('messages.our_professional_services')); ?></h1>
                <p class="lead mb-0"><?php echo e(__('messages.comprehensive_air_solutions')); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Services Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-wind fa-lg"></i>
                            </div>
                            <h4 class="card-title mb-0"><?php echo e($service->name); ?></h4>
                        </div>
                        <p class="card-text text-muted mb-4"><?php echo e($service->short_description); ?></p>
                        <div class="mt-auto">
                            <a href="<?php echo e(route('services.show', $service)); ?>" class="btn btn-primary">
                                <?php echo e(__('messages.learn_more')); ?> <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <?php if($services->isEmpty()): ?>
        <div class="text-center py-5">
            <i class="fas fa-tools fa-4x text-muted mb-3"></i>
            <h3 class="text-muted"><?php echo e(__('messages.no_services_available')); ?></h3>
            <p class="text-muted"><?php echo e(__('messages.check_back_later')); ?></p>
            <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-primary"><?php echo e(__('messages.contact_us')); ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 fw-bold text-primary mb-3"><?php echo e(__('messages.need_custom_solution')); ?></h2>
                <p class="mb-0"><?php echo e(__('messages.custom_solution_text')); ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope me-2"></i><?php echo e(__('messages.get_free_quote')); ?>

                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/services/index.blade.php ENDPATH**/ ?>