

<?php $__env->startSection('title', __('messages.admin_dashboard')); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('messages.admin_dashboard')); ?></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e(__('messages.services')); ?></h5>
                                    <p class="card-text"><?php echo e(__('messages.manage_services')); ?></p>
                                    <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-light"><?php echo e(__('messages.view')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e(__('messages.posts')); ?></h5>
                                    <p class="card-text"><?php echo e(__('messages.manage_posts')); ?></p>
                                    <a href="<?php echo e(route('admin.posts.index')); ?>" class="btn btn-light"><?php echo e(__('messages.view')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e(__('messages.categories')); ?></h5>
                                    <p class="card-text"><?php echo e(__('messages.manage_categories')); ?></p>
                                    <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-light"><?php echo e(__('messages.view')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e(__('messages.inquiries')); ?></h5>
                                    <p class="card-text"><?php echo e(__('messages.manage_inquiries')); ?></p>
                                    <a href="<?php echo e(route('admin.inquiries.index')); ?>" class="btn btn-light"><?php echo e(__('messages.view')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card bg-secondary text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e(__('messages.settings')); ?></h5>
                                    <p class="card-text">إدارة إعدادات الموقع</p>
                                    <a href="<?php echo e(route('admin.settings.index')); ?>" class="btn btn-light"><?php echo e(__('messages.view')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"><?php echo e(__('messages.recent_activities')); ?></div>
                                <div class="card-body">
                                    <p><?php echo e(__('messages.welcome_admin')); ?></p>
                                    <p><?php echo e(__('messages.admin_dashboard_description')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>