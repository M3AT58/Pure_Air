

<?php $__env->startSection('title', __('messages.settings') . ' - ' . __('messages.admin_dashboard')); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('messages.settings')); ?></h4>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">
                        <?php echo e(__('messages.back_to_list')); ?>

                    </a>
                </div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i><?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('admin.settings.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <!-- Site Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-globe me-2"></i><?php echo e(__('messages.site_information')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="site_title" class="form-label"><?php echo e(__('messages.site_title')); ?> *</label>
                                            <input type="text" class="form-control" id="site_title" name="site_title" 
                                                   value="<?php echo e($settings['site_title']->value ?? ''); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="google_analytics_id" class="form-label"><?php echo e(__('messages.google_analytics_id')); ?></label>
                                            <input type="text" class="form-control" id="google_analytics_id" name="google_analytics_id" 
                                                   value="<?php echo e($settings['google_analytics_id']->value ?? ''); ?>" 
                                                   placeholder="G-XXXXXXXXXX">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="gtm_id" class="form-label"><?php echo e(__('messages.gtm_id')); ?></label>
                                            <input type="text" class="form-control" id="gtm_id" name="gtm_id" 
                                                   value="<?php echo e($settings['gtm_id']->value ?? ''); ?>" 
                                                   placeholder="GTM-XXXXXXXXX">
                                            <div class="form-text"><?php echo e(__('messages.gtm_help')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Reserved for future tracking options -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="site_description" class="form-label"><?php echo e(__('messages.site_description')); ?> *</label>
                                    <textarea class="form-control" id="site_description" name="site_description" rows="3" required><?php echo e($settings['site_description']->value ?? ''); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="site_description_ar" class="form-label"><?php echo e(__('messages.site_description_ar')); ?> *</label>
                                    <textarea class="form-control" id="site_description_ar" name="site_description_ar" rows="3" required><?php echo e($settings['site_description_ar']->value ?? ''); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Hero Section -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-home me-2"></i><?php echo e(__('messages.hero_section')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="hero_title" class="form-label"><?php echo e(__('messages.hero_title')); ?> *</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" 
                                           value="<?php echo e($settings['hero_title']->value ?? ''); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="hero_subtitle" class="form-label"><?php echo e(__('messages.hero_subtitle')); ?> *</label>
                                    <textarea class="form-control" id="hero_subtitle" name="hero_subtitle" rows="3" required><?php echo e($settings['hero_subtitle']->value ?? ''); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-address-book me-2"></i><?php echo e(__('messages.contact_info')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="contact_phone" class="form-label"><?php echo e(__('messages.phone')); ?> *</label>
                                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" 
                                                   value="<?php echo e($settings['contact_phone']->value ?? ''); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="contact_email" class="form-label"><?php echo e(__('messages.email')); ?> *</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" 
                                                   value="<?php echo e($settings['contact_email']->value ?? ''); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_address" class="form-label"><?php echo e(__('messages.address')); ?> *</label>
                                    <textarea class="form-control" id="contact_address" name="contact_address" rows="2" required><?php echo e($settings['contact_address']->value ?? ''); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_address_ar" class="form-label"><?php echo e(__('messages.address_ar')); ?> *</label>
                                    <textarea class="form-control" id="contact_address_ar" name="contact_address_ar" rows="2" required><?php echo e($settings['contact_address_ar']->value ?? ''); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="company_hours" class="form-label"><?php echo e(__('messages.business_hours')); ?> *</label>
                                    <textarea class="form-control" id="company_hours" name="company_hours" rows="4" required><?php echo e($settings['company_hours']->value ?? ''); ?></textarea>
                                    <div class="form-text"><?php echo e(__('messages.business_hours_help')); ?></div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-share-alt me-2"></i><?php echo e(__('messages.social_media')); ?></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="whatsapp_number" class="form-label"><?php echo e(__('messages.whatsapp_number')); ?> *</label>
                                            <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" 
                                                   value="<?php echo e($settings['whatsapp_number']->value ?? ''); ?>" 
                                                   placeholder="966501234567" required>
                                            <div class="form-text"><?php echo e(__('messages.whatsapp_help')); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="instagram_handle" class="form-label"><?php echo e(__('messages.instagram_handle')); ?> *</label>
                                            <input type="text" class="form-control" id="instagram_handle" name="instagram_handle" 
                                                   value="<?php echo e($settings['instagram_handle']->value ?? ''); ?>" 
                                                   placeholder="pure_air2612" required>
                                            <div class="form-text"><?php echo e(__('messages.instagram_help')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save me-2"></i><?php echo e(__('messages.save_settings')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>