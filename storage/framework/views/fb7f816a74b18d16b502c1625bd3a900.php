

<?php $__env->startSection('title', __('messages.manage_posts')); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.manage_posts')); ?></h4>
                    <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-primary">
                        <?php echo e(__('messages.add_new_post')); ?>

                    </a>
                </div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('messages.title')); ?></th>
                                    <th><?php echo e(__('messages.category')); ?></th>
                                    <th><?php echo e(__('messages.author')); ?></th>
                                    <th><?php echo e(__('messages.status')); ?></th>
                                    <th><?php echo e(__('messages.published_at')); ?></th>
                                    <th><?php echo e(__('messages.actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->category->name ?? __('messages.no_category')); ?></td>
                                        <td><?php echo e($post->user->name); ?></td>
                                        <td>
                                            <?php if($post->status === 'published'): ?>
                                                <span class="badge bg-success"><?php echo e(__('messages.published')); ?></span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary"><?php echo e(__('messages.draft')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($post->published_at ? $post->published_at->format('Y-m-d') : '-'); ?></td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="<?php echo e(route('admin.posts.show', $post)); ?>" 
                                                   class="btn btn-sm btn-info"><?php echo e(__('messages.view')); ?></a>
                                                <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" 
                                                   class="btn btn-sm btn-warning"><?php echo e(__('messages.edit')); ?></a>
                                                <form action="<?php echo e(route('admin.posts.destroy', $post)); ?>" 
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
                                        <td colspan="6" class="text-center">
                                            <?php echo e(__('messages.no_posts_found')); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>