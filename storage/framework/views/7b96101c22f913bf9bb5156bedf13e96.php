

<?php $__env->startSection('title', $post->meta_title ?: $post->title . ' - بيور إير'); ?>
<?php $__env->startSection('meta_description', $post->meta_description ?: $post->excerpt); ?>
<?php $__env->startSection('meta_keywords', $post->meta_keywords ?: 'مقالات الهواء النقي، ' . strtolower($post->title)); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb text-white-50">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-white-50"><?php echo e(__('messages.home')); ?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('blog.index')); ?>" class="text-white-50"><?php echo e(__('messages.blog')); ?></a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page"><?php echo e($post->title); ?></li>
                    </ol>
                </nav>
                <div class="mb-3">
                    <?php if($post->category): ?>
                    <span class="badge bg-light text-primary"><?php echo e($post->category->name); ?></span>
                    <?php endif; ?>
                    <span class="text-white-50 ms-3"><?php echo e($post->published_at->format('Y/m/d')); ?></span>
                    <?php if($post->user): ?>
                    <span class="text-white-50 ms-3"><?php echo e(__('messages.by')); ?> <?php echo e($post->user->name); ?></span>
                    <?php endif; ?>
                </div>
                <h1 class="display-4 fw-bold mb-3"><?php echo e($post->title); ?></h1>
                <p class="lead mb-0"><?php echo e($post->excerpt); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Post Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Featured Image -->
                <?php if($post->featured_image): ?>
                <div class="mb-5">
                    <img src="<?php echo e(asset($post->featured_image)); ?>" class="img-fluid rounded" alt="<?php echo e($post->title); ?>">
                </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="content mb-5">
                    <?php echo nl2br(e($post->body)); ?>

                </div>

                <!-- Tags -->
                <?php if(isset($post->tags) && $post->tags): ?>
                <div class="mb-5">
                    <h4 class="h5 fw-bold text-primary mb-3"><?php echo e(__('messages.tags')); ?></h4>
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge bg-light text-primary me-2 mb-2"><?php echo e($tag); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>

                <!-- Share Buttons -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold text-primary mb-3"><?php echo e(__('messages.share_post')); ?></h4>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/?text=<?php echo e(urlencode($post->title . ' - ' . route('blog.show', $post))); ?>" 
                           class="btn btn-success" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i><?php echo e(__('messages.whatsapp')); ?>

                        </a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo e(urlencode($post->title)); ?>&url=<?php echo e(route('blog.show', $post)); ?>" 
                           class="btn btn-info text-white" target="_blank">
                            <i class="fab fa-twitter me-2"></i>تويتر
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('blog.show', $post)); ?>" 
                           class="btn btn-primary" target="_blank">
                            <i class="fab fa-facebook me-2"></i>فيسبوك
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Related Posts -->
                <?php if($relatedPosts && $relatedPosts->count() > 0): ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-newspaper me-2"></i><?php echo e(__('messages.related_posts')); ?>

                        </h5>
                        <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-3 pb-3 border-bottom">
                            <h6 class="mb-1">
                                <a href="<?php echo e(route('blog.show', $relatedPost)); ?>" class="text-decoration-none text-dark">
                                    <?php echo e($relatedPost->title); ?>

                                </a>
                            </h6>
                            <small class="text-muted"><?php echo e($relatedPost->published_at->format('Y/m/d')); ?></small>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Contact Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-envelope me-2"></i><?php echo e(__('messages.contact_us')); ?>

                        </h5>
                        <p class="card-text mb-4"><?php echo e(__('messages.contact_for_questions')); ?></p>
                        <div class="d-grid gap-2">
                            <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-primary">
                                <i class="fas fa-envelope me-2"></i><?php echo e(__('messages.send_message')); ?>

                            </a>
                            <a href="tel:<?php echo e(\App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR')); ?>" class="btn btn-outline-primary">
                                <i class="fas fa-phone me-2"></i><?php echo e(__('messages.call_now')); ?>

                            </a>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <?php if($categories && $categories->count() > 0): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-list me-2"></i><?php echo e(__('messages.categories')); ?>

                        </h5>
                        <div class="list-group list-group-flush">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('blog.index', ['category' => $category->slug])); ?>" class="list-group-item list-group-item-action">
                                <?php echo e($category->name); ?> (<?php echo e($category->posts_count); ?>)
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 fw-bold text-primary mb-3"><?php echo e(__('messages.need_air_service')); ?></h2>
                <p class="mb-0"><?php echo e(__('messages.professional_air_services')); ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="<?php echo e(route('services.index')); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-tools me-2"></i><?php echo e(__('messages.view_services')); ?>

                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/blog/show.blade.php ENDPATH**/ ?>