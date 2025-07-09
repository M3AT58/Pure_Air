

<?php $__env->startSection('title', __('messages.view') . ' - ' . $inquiry->subject); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.inquiry_details')); ?></h4>
                    <a href="<?php echo e(route('admin.inquiries.index')); ?>" class="btn btn-secondary">
                        <?php echo e(__('messages.back_to_list')); ?>

                    </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200"><?php echo e(__('messages.name')); ?>:</th>
                                    <td><?php echo e($inquiry->name); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.email')); ?>:</th>
                                    <td><?php echo e($inquiry->email); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.phone')); ?>:</th>
                                    <td><?php echo e($inquiry->phone ?: '-'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.subject')); ?>:</th>
                                    <td><?php echo e($inquiry->subject); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.status')); ?>:</th>
                                    <td>
                                        <?php if($inquiry->status === 'new'): ?>
                                            <span class="badge bg-primary"><?php echo e(__('messages.new')); ?></span>
                                        <?php elseif($inquiry->status === 'in_progress'): ?>
                                            <span class="badge bg-warning"><?php echo e(__('messages.in_progress')); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-success"><?php echo e(__('messages.closed')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.created_at')); ?>:</th>
                                    <td><?php echo e($inquiry->created_at->format('Y-m-d H:i')); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <form action="<?php echo e(route('admin.inquiries.update', $inquiry)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                
                                <div class="mb-3">
                                    <label for="status" class="form-label"><?php echo e(__('messages.update_status')); ?></label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="new" <?php echo e($inquiry->status === 'new' ? 'selected' : ''); ?>><?php echo e(__('messages.new')); ?></option>
                                        <option value="in_progress" <?php echo e($inquiry->status === 'in_progress' ? 'selected' : ''); ?>><?php echo e(__('messages.in_progress')); ?></option>
                                        <option value="closed" <?php echo e($inquiry->status === 'closed' ? 'selected' : ''); ?>><?php echo e(__('messages.closed')); ?></option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('messages.update_status')); ?>

                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5><?php echo e(__('messages.message')); ?></h5>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo nl2br(e($inquiry->message)); ?>

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/inquiries/show.blade.php ENDPATH**/ ?>