

<?php $__env->startSection('title', __('messages.blog') . ' - بيور إير'); ?>
<?php $__env->startSection('meta_description', __('messages.blog_meta_description')); ?>
<?php $__env->startSection('meta_keywords', __('messages.blog_meta_keywords')); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3"><?php echo e(__('messages.our_blog')); ?></h1>
                <p class="lead mb-0"><?php echo e(__('messages.blog_subtitle')); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Blog Posts -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-lg-4 col-md-6">
                <article class="card h-100">
                    <?php if($post->featured_image): ?>
                    <img src="<?php echo e(asset($post->featured_image)); ?>" class="card-img-top" alt="<?php echo e($post->title); ?>" style="height: 200px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <?php if($post->category): ?>
                            <span class="badge bg-primary"><?php echo e($post->category->name); ?></span>
                            <?php endif; ?>
                            <small class="text-muted"><?php echo e($post->published_at->format('Y/m/d')); ?></small>
                        </div>
                        <h5 class="card-title">
                            <a href="<?php echo e(route('blog.show', $post)); ?>" class="text-decoration-none text-dark">
                                <?php echo e($post->title); ?>

                            </a>
                        </h5>
                        <p class="card-text text-muted"><?php echo e($post->excerpt); ?></p>
                        <div class="mt-auto">
                            <a href="<?php echo e(route('blog.show', $post)); ?>" class="btn btn-primary">
                                <?php echo e(__('messages.read_more')); ?> <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-blog fa-4x text-muted mb-3"></i>
                    <h3 class="text-muted"><?php echo e(__('messages.no_posts_available')); ?></h3>
                    <p class="text-muted"><?php echo e(__('messages.check_back_for_posts')); ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <?php if($posts->hasPages()): ?>
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <?php echo e($posts->links()); ?>

                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="h3 fw-bold text-primary mb-3"><?php echo e(__('messages.stay_updated')); ?></h2>
                <p class="mb-4"><?php echo e(__('messages.newsletter_description')); ?></p>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="<?php echo e(__('messages.enter_email')); ?>">
                    <button class="btn btn-primary" type="button"><?php echo e(__('messages.subscribe')); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/blog/index.blade.php ENDPATH**/ ?>