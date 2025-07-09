<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php
        $gtmId = \App\Models\Setting::get('gtm_id');
        $gaId = \App\Models\Setting::get('google_analytics_id');
    ?>

    <?php if($gtmId): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo e($gtmId); ?>');</script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>

    <?php if($gaId && !$gtmId): ?>
    <!-- Google Analytics (GA4) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($gaId); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo e($gaId); ?>');
    </script>
    <!-- End Google Analytics -->
    <?php endif; ?>

    <!-- SEO Meta Tags -->
    <title><?php echo $__env->yieldContent('title', 'بيور إير - خدمات مكافحة الحشرات وصيانة الخزانات والمكيفات'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'بيور إير تقدم خدمات احترافية لمكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات للمنازل والمؤسسات.'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'مكافحة الحشرات، عزل الخزانات، تعقيم الخزانات، صيانة المكيفات، تنظيف المكيفات'); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'بيور إير - خدمات مكافحة الحشرات وصيانة الخزانات والمكيفات'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'بيور إير تقدم خدمات احترافية لمكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات للمنازل والمؤسسات.'); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:site_name" content="بيور إير">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?php echo $__env->yieldContent('title', 'بيور إير - خدمات مكافحة الحشرات وصيانة الخزانات والمكيفات'); ?>">
    <meta property="twitter:description" content="<?php echo $__env->yieldContent('meta_description', 'بيور إير تقدم خدمات احترافية لمكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات للمنازل والمؤسسات.'); ?>">

    <!-- Fonts - Arabic Support -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Custom RTL CSS -->
    <style>
        :root {
            --primary-green: #28a745;
            --dark-green: #1e7e34;
            --light-green: #c3e6cb;
            --text-dark: #212529;
            --text-muted: #6c757d;
        }

        body {
            font-family: 'Cairo', 'Tajawal', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            direction: rtl;
        }

        .btn-primary {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
        }

        .btn-primary:hover {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
        }

        .text-primary {
            color: var(--primary-green) !important;
        }

        .bg-primary {
            background-color: var(--primary-green) !important;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-green) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
            color: white;
            padding: 100px 0;
        }

        .fixed-buttons {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .fixed-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            text-decoration: none;
            color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .fixed-btn:hover {
            transform: scale(1.1);
            color: white;
        }

        .whatsapp-btn {
            background-color: #25D366;
        }

        .call-btn {
            background-color: var(--primary-green);
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .blog-card {
            transition: transform 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-2px);
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 50px 0 30px;
        }

        .footer-social a {
            color: var(--primary-green);
            font-size: 1.5rem;
            margin-left: 15px;
            transition: color 0.3s ease;
        }

        .footer-social a:hover {
            color: white;
        }

        /* RTL Adjustments */
        .navbar-nav .nav-link {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .me-2 {
            margin-left: 0.5rem !important;
            margin-right: 0 !important;
        }

        .ms-2 {
            margin-right: 0.5rem !important;
            margin-left: 0 !important;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .fixed-buttons {
                bottom: 15px;
                left: 15px;
            }
            
            .fixed-btn {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
        }
    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <?php if($gtmId): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo e($gtmId); ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-shield-alt ms-2"></i>بيور إير
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.home')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>"><?php echo e(__('messages.about')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('services.*') ? 'active' : ''); ?>" href="<?php echo e(route('services.index')); ?>"><?php echo e(__('messages.services')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('blog.*') ? 'active' : ''); ?>" href="<?php echo e(route('blog.index')); ?>"><?php echo e(__('messages.blog')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('contact.*') ? 'active' : ''); ?>" href="<?php echo e(route('contact.index')); ?>"><?php echo e(__('messages.contact')); ?></a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.login')); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?php echo e(Auth::user()->name); ?>

                            </a>
                            <ul class="dropdown-menu">
                                <?php if(Auth::user()->isAdmin()): ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('messages.admin')); ?></a></li>
                                <?php endif; ?>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <?php echo e(__('auth.logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Fixed Bottom Corner Buttons -->
    <div class="fixed-buttons">
        <a href="https://wa.me/<?php echo e(\App\Models\Setting::get('whatsapp_number', '15551234567')); ?>?text=<?php echo e(urlencode(__('messages.whatsapp_text'))); ?>" 
           class="fixed-btn whatsapp-btn" target="_blank" title="محادثة عبر واتساب"
           <?php if($gtmId || $gaId): ?> onclick="gtag('event', 'click', { 'event_category': 'Contact', 'event_label': 'WhatsApp Fixed Button' });" <?php endif; ?>>
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:<?php echo e(\App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR')); ?>" 
           class="fixed-btn call-btn" title="<?php echo e(__('messages.call_us')); ?>"
           <?php if($gtmId || $gaId): ?> onclick="gtag('event', 'click', { 'event_category': 'Contact', 'event_label': 'Phone Fixed Button' });" <?php endif; ?>>
            <i class="fas fa-phone"></i>
        </a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-primary mb-3">
                        <i class="fas fa-shield-alt ms-2"></i>بيور إير
                    </h5>
                    <p class="mb-3"><?php echo e(\App\Models\Setting::get('site_description_ar', 'خدمات احترافية لمكافحة الحشرات وصيانة الخزانات والمكيفات لمنزلك ومؤسستك.')); ?></p>
                    <div class="footer-social">
                        <a href="https://instagram.com/<?php echo e(\App\Models\Setting::get('instagram_handle', 'pure_air2612')); ?>" target="_blank"
                           <?php if($gtmId || $gaId): ?> onclick="gtag('event', 'click', { 'event_category': 'Social', 'event_label': 'Instagram Footer' });" <?php endif; ?>>
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/<?php echo e(\App\Models\Setting::get('whatsapp_number', '15551234567')); ?>" target="_blank"
                           <?php if($gtmId || $gaId): ?> onclick="gtag('event', 'click', { 'event_category': 'Social', 'event_label': 'WhatsApp Footer' });" <?php endif; ?>>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-uppercase mb-3"><?php echo e(__('messages.quick_links')); ?></h6>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo e(route('home')); ?>" class="text-light text-decoration-none"><?php echo e(__('messages.home')); ?></a></li>
                        <li><a href="<?php echo e(route('about')); ?>" class="text-light text-decoration-none"><?php echo e(__('messages.about')); ?></a></li>
                        <li><a href="<?php echo e(route('services.index')); ?>" class="text-light text-decoration-none"><?php echo e(__('messages.services')); ?></a></li>
                        <li><a href="<?php echo e(route('blog.index')); ?>" class="text-light text-decoration-none"><?php echo e(__('messages.blog')); ?></a></li>
                        <li><a href="<?php echo e(route('contact.index')); ?>" class="text-light text-decoration-none"><?php echo e(__('messages.contact')); ?></a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-uppercase mb-3"><?php echo e(__('messages.services')); ?></h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">مكافحة الحشرات</a></li>
                        <li><a href="#" class="text-light text-decoration-none">عزل وتعقيم الخزانات</a></li>
                        <li><a href="#" class="text-light text-decoration-none">صيانة المكيفات</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 mb-4">
                    <h6 class="text-uppercase mb-3"><?php echo e(__('messages.contact_info')); ?></h6>
                    <p><i class="fas fa-phone ms-2"></i><?php echo e(\App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR')); ?></p>
                    <p><i class="fas fa-envelope ms-2"></i><?php echo e(\App\Models\Setting::get('contact_email', 'info@pureair.com')); ?></p>
                    <p><i class="fas fa-map-marker-alt ms-2"></i><?php echo e(\App\Models\Setting::get('contact_address_ar', 'الرياض، المملكة العربية السعودية')); ?></p>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo e(date('Y')); ?> بيور إير. <?php echo e(__('messages.all_rights_reserved')); ?></p>
                </div>
                <div class="col-md-6 text-md-start">
                    <p class="mb-0">
                        <?php echo e(__('messages.follow_us_instagram')); ?> 
                        <a href="https://instagram.com/<?php echo e(\App\Models\Setting::get('instagram_handle', 'pure_air2612')); ?>" class="text-primary" target="_blank">
                            &#64;<?php echo e(\App\Models\Setting::get('instagram_handle', 'pure_air2612')); ?>

                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\M3AT58\Desktop\Pure_Air\resources\views/layouts/app.blade.php ENDPATH**/ ?>