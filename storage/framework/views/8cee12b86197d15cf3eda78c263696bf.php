

<?php $__env->startSection('title', __('messages.view') . ' - ' . $post->title); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.post_details')); ?></h4>
                    <div>
                        <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-warning">
                            <?php echo e(__('messages.edit')); ?>

                        </a>
                        <a href="<?php echo e(route('admin.posts.index')); ?>" class="btn btn-secondary">
                            <?php echo e(__('messages.back_to_list')); ?>

                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200"><?php echo e(__('messages.title')); ?>:</th>
                                    <td><?php echo e($post->title); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.slug')); ?>:</th>
                                    <td><?php echo e($post->slug); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.category')); ?>:</th>
                                    <td><?php echo e($post->category->name ?? __('messages.no_category')); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.author')); ?>:</th>
                                    <td><?php echo e($post->user->name); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.status')); ?>:</th>
                                    <td>
                                        <?php if($post->status === 'published'): ?>
                                            <span class="badge bg-success"><?php echo e(__('messages.published')); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary"><?php echo e(__('messages.draft')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.published_at')); ?>:</th>
                                    <td><?php echo e($post->published_at ? $post->published_at->format('Y-m-d H:i') : '-'); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5><?php echo e(__('messages.meta_information')); ?></h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200"><?php echo e(__('messages.meta_title')); ?>:</th>
                                    <td><?php echo e($post->meta_title ?: '-'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.meta_description')); ?>:</th>
                                    <td><?php echo e($post->meta_description ?: '-'); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('messages.meta_keywords')); ?>:</th>
                                    <td><?php echo e($post->meta_keywords ?: '-'); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5><?php echo e(__('messages.excerpt')); ?></h5>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo e($post->excerpt); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5><?php echo e(__('messages.body')); ?></h5>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo nl2br(e($post->body)); ?>

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>