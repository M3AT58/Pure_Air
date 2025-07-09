

<?php $__env->startSection('title', __('messages.manage_services')); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.manage_services')); ?></h4>
                    <a href="<?php echo e(route('admin.services.create')); ?>" class="btn btn-primary">
                        <?php echo e(__('messages.add_new_service')); ?>

                    </a>
                </div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('messages.name')); ?></th>
                                    <th><?php echo e(__('messages.short_description')); ?></th>
                                    <th><?php echo e(__('messages.status')); ?></th>
                                    <th><?php echo e(__('messages.sort_order')); ?></th>
                                    <th><?php echo e(__('messages.actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($service->name); ?></td>
                                        <td><?php echo e(substr($service->short_description, 0, 50)); ?><?php echo e(strlen($service->short_description) > 50 ? '...' : ''); ?></td>
                                        <td>
                                            <?php if($service->is_active): ?>
                                                <span class="badge bg-success"><?php echo e(__('messages.active')); ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary"><?php echo e(__('messages.inactive')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($service->sort_order); ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('admin.services.show', $service)); ?>" 
                                                   class="btn btn-sm btn-info"><?php echo e(__('messages.view')); ?></a>
                                                <a href="<?php echo e(route('admin.services.edit', $service)); ?>" 
                                                   class="btn btn-sm btn-warning"><?php echo e(__('messages.edit')); ?></a>
                                                <form action="<?php echo e(route('admin.services.destroy', $service)); ?>" 
                                                      method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            data-confirm-message="<?php echo e(__('messages.confirm_delete')); ?>"
                                                            onclick="return confirm(this.dataset.confirmMessage)">
                                                        <?php echo e(__('messages.delete')); ?>

                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <?php echo e(__('messages.no_services_found')); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        <?php echo e($services->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/services/index.blade.php ENDPATH**/ ?>