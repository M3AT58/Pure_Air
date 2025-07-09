

<?php $__env->startSection('title', __('messages.view') . ' - ' . $service->name); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.service_details')); ?></h4>
                    <div>
                        <a href="<?php echo e(route('admin.services.edit', $service)); ?>" class="btn btn-warning">
                            <?php echo e(__('messages.edit')); ?>

                        </a>
                        <a href="<?php echo e(route('admin.services.index')); ?>" class="btn btn-secondary">
                            <?php echo e(__('messages.back_to_list')); ?>

                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200"><?php echo e(__('messages.name')); ?>:</th>
                                    <td><?php echo e($service->name); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.slug')); ?>:</th>
                                    <td><?php echo e($service->slug); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.status')); ?>:</th>
                                    <td>
                                        <?php if($service->is_active): ?>
                                            <span class="badge bg-success"><?php echo e(__('messages.active')); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary"><?php echo e(__('messages.inactive')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.sort_order')); ?>:</th>
                                    <td><?php echo e($service->sort_order); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.created_at')); ?>:</th>
                                    <td><?php echo e($service->created_at->format('Y-m-d H:i')); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.updated_at')); ?>:</th>
                                    <td><?php echo e($service->updated_at->format('Y-m-d H:i')); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5><?php echo e(__('messages.meta_information')); ?></h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200"><?php echo e(__('messages.meta_title')); ?>:</th>
                                    <td><?php echo e($service->meta_title ?: '-'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.meta_description')); ?>:</th>
                                    <td><?php echo e($service->meta_description ?: '-'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.meta_keywords')); ?>:</th>
                                    <td><?php echo e($service->meta_keywords ?: '-'); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5><?php echo e(__('messages.short_description')); ?></h5>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo e($service->short_description); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5><?php echo e(__('messages.full_description')); ?></h5>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo nl2br(e($service->full_description)); ?>

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/services/show.blade.php ENDPATH**/ ?>