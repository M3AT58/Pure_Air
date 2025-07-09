@extends('layouts.app')

@section('title', 'بيور إير - خدمات مكافحة الحشرات وصيانة الخزانات والمكيفات')
@section('meta_description', 'بيور إير تقدم خدمات احترافية لمكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات للمنازل والمؤسسات.')
@section('meta_keywords', 'مكافحة الحشرات، عزل الخزانات، تعقيم الخزانات، صيانة المكيفات، تنظيف المكيفات، بيور إير')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">{{ __('messages.hero_title') }}</h1>
                <p class="lead mb-4">{{ __('messages.hero_subtitle') }}</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact.index') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-envelope ms-2"></i>{{ __('messages.get_quote') }}
                    </a>
                    <a href="{{ route('services.index') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-list ms-2"></i>{{ __('messages.services') }}
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row">
                    <div class="col-4 text-center">
                        <i class="fas fa-bug" style="font-size: 3rem; opacity: 0.3; color: white;"></i>
                        <p class="text-white mt-2 small">{{ __('messages.pest_control') }}</p>
                    </div>
                    <div class="col-4 text-center">
                        <i class="fas fa-tint" style="font-size: 3rem; opacity: 0.3; color: white;"></i>
                        <p class="text-white mt-2 small">{{ __('messages.tank_cleaning') }}</p>
                    </div>
                    <div class="col-4 text-center">
                        <i class="fas fa-wind" style="font-size: 3rem; opacity: 0.3; color: white;"></i>
                        <p class="text-white mt-2 small">{{ __('messages.ac_maintenance') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">{{ __('messages.featured_services') }}</h2>
                <p class="lead text-muted">{{ __('messages.services_subtitle') }}</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($featuredServices as $service)
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-3 ms-3">
                                @if(stripos($service->name, 'حشرات') !== false || stripos($service->name, 'مكافحة') !== false)
                                    <i class="fas fa-bug fa-lg"></i>
                                @elseif(stripos($service->name, 'خزان') !== false || stripos($service->name, 'تعقيم') !== false)
                                    <i class="fas fa-tint fa-lg"></i>
                                @elseif(stripos($service->name, 'مكيف') !== false || stripos($service->name, 'تكييف') !== false)
                                    <i class="fas fa-wind fa-lg"></i>
                                @else
                                    <i class="fas fa-tools fa-lg"></i>
                                @endif
                            </div>
                            <h5 class="card-title mb-0">{{ $service->name }}</h5>
                        </div>
                        <p class="card-text text-muted">{{ $service->short_description }}</p>
                        <a href="{{ route('services.show', $service) }}" class="btn btn-primary">
                            {{ __('messages.learn_more') }} <i class="fas fa-arrow-left me-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('services.index') }}" class="btn btn-outline-primary btn-lg">
                {{ __('messages.view_all_services') }} <i class="fas fa-arrow-left me-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">{{ __('messages.why_choose_us') }}</h2>
                <p class="lead text-muted">{{ __('messages.comprehensive_protection') }}</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-certificate fa-2x"></i>
                </div>
                <h5>{{ __('messages.certified_technicians') }}</h5>
                <p class="text-muted">فريقنا يتكون من متخصصين معتمدين في مكافحة الحشرات وصيانة الخزانات والمكيفات.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-leaf fa-2x"></i>
                </div>
                <h5>{{ __('messages.eco_friendly_products') }}</h5>
                <p class="text-muted">نستخدم منتجات آمنة وصديقة للبيئة لحماية عائلتك والبيئة.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-tools fa-2x"></i>
                </div>
                <h5>{{ __('messages.advanced_equipment') }}</h5>
                <p class="text-muted">أحدث المعدات والتقنيات للحصول على أفضل النتائج.</p>
            </div>
            
            <div class="col-lg-3 col-md-6 text-center">
                <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-shield-alt fa-2x"></i>
                </div>
                <h5>{{ __('messages.satisfaction_guarantee') }}</h5>
                <p class="text-muted">ضمان رضا 100% على جميع خدماتنا.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">خدماتنا الرئيسية</h2>
                <p class="lead text-muted">نقدم حلولاً شاملة ومتخصصة لحماية وصيانة منزلك أو مؤسستك</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger text-white rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-bug fa-3x"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.pest_control') }}</h4>
                        <p class="text-muted mb-4">مكافحة شاملة لجميع أنواع الحشرات والآفات باستخدام أحدث التقنيات الآمنة والفعالة.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success ms-2"></i> مكافحة الصراصير والنمل</li>
                            <li><i class="fas fa-check text-success ms-2"></i> مكافحة القوارض</li>
                            <li><i class="fas fa-check text-success ms-2"></i> مكافحة البق والبراغيث</li>
                            <li><i class="fas fa-check text-success ms-2"></i> مكافحة النمل الأبيض</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-info text-white rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-tint fa-3x"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.tank_cleaning') }}</h4>
                        <p class="text-muted mb-4">عزل وتعقيم الخزانات بأحدث التقنيات لضمان نظافة وجودة المياه.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success ms-2"></i> تنظيف وتعقيم الخزانات</li>
                            <li><i class="fas fa-check text-success ms-2"></i> عزل الخزانات العلوية والأرضية</li>
                            <li><i class="fas fa-check text-success ms-2"></i> فحص جودة المياه</li>
                            <li><i class="fas fa-check text-success ms-2"></i> صيانة أنظمة التوزيع</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-success text-white rounded-circle p-4 mx-auto mb-3" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-wind fa-3x"></i>
                        </div>
                        <h4 class="fw-bold mb-3">{{ __('messages.ac_maintenance') }}</h4>
                        <p class="text-muted mb-4">نظافة وصيانة شاملة لأنظمة التكييف لضمان أداء مثالي وهواء نظيف.</p>
                        <ul class="list-unstyled text-start">
                            <li><i class="fas fa-check text-success ms-2"></i> تنظيف الفلاتر والمبخرات</li>
                            <li><i class="fas fa-check text-success ms-2"></i> صيانة الوحدات الداخلية والخارجية</li>
                            <li><i class="fas fa-check text-success ms-2"></i> فحص مستوى الفريون</li>
                            <li><i class="fas fa-check text-success ms-2"></i> تنظيف مجاري الهواء</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts Section -->
@if($latestPosts->count() > 0)
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">{{ __('messages.latest_news') }}</h2>
                <p class="lead text-muted">ابق على اطلاع بأحدث النصائح والرؤى حول مكافحة الحشرات وصيانة الخزانات والمكيفات.</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($latestPosts as $post)
            <div class="col-lg-4 col-md-6">
                <article class="card blog-card h-100">
                    @if($post->featured_image)
                    <img src="{{ asset($post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary">{{ $post->category->name }}</span>
                            <small class="text-muted">{{ $post->published_at->format('M d, Y') }}</small>
                        </div>
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($post->excerpt, 100) }}</p>
                        <a href="{{ route('blog.show', $post) }}" class="btn btn-outline-primary">
                            {{ __('messages.read_more') }} <i class="fas fa-arrow-left me-2"></i>
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-lg">
                {{ __('messages.view_all_posts') }} <i class="fas fa-arrow-left me-2"></i>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">{{ __('messages.cta_title') }}</h2>
                <p class="lead mb-0">{{ __('messages.cta_subtitle') }}</p>
            </div>
            <div class="col-lg-4 text-lg-start">
                <a href="{{ route('contact.index') }}" class="btn btn-light btn-lg ms-3">
                    <i class="fas fa-envelope ms-2"></i>{{ __('messages.get_quote') }}
                </a>
                <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR') }}" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone ms-2"></i>{{ __('messages.call_now') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
