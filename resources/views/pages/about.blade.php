@extends('layouts.app')

@section('title', 'من نحن - بيور إير')
@section('meta_description', 'تعرف على بيور إير ومهمتنا في تقديم خدمات مكافحة الحشرات وعزل وتعقيم الخزانات ونظافة وصيانة المكيفات.')
@section('meta_keywords', 'من نحن بيور إير، شركة مكافحة الحشرات، متخصصو صيانة الخزانات، صيانة المكيفات')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">{{ __('messages.about_title') }}</h1>
                <p class="lead mb-0">{{ __('messages.about_subtitle') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Company Overview -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-primary mb-4">{{ __('messages.our_mission') }}</h2>
                <p class="lead mb-4">{{ __('messages.mission_text') }}</p>
                <p class="mb-4">نحن نؤمن أن الجميع يستحقون العيش في بيئة صحية وآمنة خالية من الحشرات والآفات، مع ضمان نظافة مصادر المياه وكفاءة أنظمة التكييف. لهذا السبب التزمنا بتقديم خدمة استثنائية باستخدام أحدث المعدات والمنتجات الآمنة بيئياً.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('services.index') }}" class="btn btn-primary">
                        <i class="fas fa-list ms-2"></i>{{ __('messages.services') }}
                    </a>
                    <a href="{{ route('contact.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-envelope ms-2"></i>{{ __('messages.get_quote') }}
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="bg-light rounded p-5">
                    <div class="row">
                        <div class="col-4 text-center mb-3">
                            <i class="fas fa-bug text-danger" style="font-size: 3rem;"></i>
                            <h6 class="text-primary mt-2">مكافحة الحشرات</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                            <i class="fas fa-tint text-info" style="font-size: 3rem;"></i>
                            <h6 class="text-primary mt-2">عزل الخزانات</h6>
                        </div>
                        <div class="col-4 text-center mb-3">
                            <i class="fas fa-wind text-success" style="font-size: 3rem;"></i>
                            <h6 class="text-primary mt-2">صيانة المكيفات</h6>
                        </div>
                    </div>
                    <h4 class="text-primary mt-3">{{ __('messages.comprehensive_protection') }}</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">{{ __('messages.our_values') }}</h2>
                <p class="lead text-muted">{{ __('messages.values_text') }}</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">{{ __('messages.quality_assurance') }}</h5>
                        <p class="text-muted">نحافظ على أعلى المعايير في جميع خدماتنا، مما يضمن نتائج استثنائية في كل مرة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-leaf fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">المسؤولية البيئية</h5>
                        <p class="text-muted">نستخدم منتجات وطرق صديقة للبيئة آمنة لعائلتك والبيئة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">التركيز على العملاء</h5>
                        <p class="text-muted">رضاك هو أولويتنا. نستمع لاحتياجاتك ونتجاوز توقعاتك.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">التكنولوجيا المتطورة</h5>
                        <p class="text-muted">نستثمر في أحدث المعدات والتقنيات لتقديم نتائج متفوقة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-certificate fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">الخبرة المهنية</h5>
                        <p class="text-muted">فنيونا المعتمدون يجلبون سنوات من الخبرة والتدريب المستمر لكل مهمة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary text-white rounded-circle p-4 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">الموثوقية</h5>
                        <p class="text-muted">نصل في الوقت المحدد وننجز عملنا بكفاءة، مع احترام جدولك الزمني.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Expertise Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-primary mb-3">خبرتنا المتخصصة</h2>
                <p class="lead text-muted">نقدم حلولاً متكاملة ومتخصصة في ثلاث مجالات رئيسية</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="bg-danger text-white rounded-circle p-4 mx-auto mb-4" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-bug fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">مكافحة الحشرات والآفات</h4>
                    <p class="text-muted mb-4">خبرة واسعة في مكافحة جميع أنواع الحشرات والآفات باستخدام أحدث التقنيات الآمنة والفعالة، مع ضمانات طويلة المدى.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-success ms-2"></i> برامج مكافحة متكاملة</li>
                        <li><i class="fas fa-check text-success ms-2"></i> مبيدات آمنة ومعتمدة</li>
                        <li><i class="fas fa-check text-success ms-2"></i> خطط وقائية مستمرة</li>
                        <li><i class="fas fa-check text-success ms-2"></i> متابعة دورية ومراقبة</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="bg-info text-white rounded-circle p-4 mx-auto mb-4" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-tint fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">عزل وتعقيم الخزانات</h4>
                    <p class="text-muted mb-4">خدمات شاملة لضمان نظافة وجودة المياه من خلال التنظيف والتعقيم والعزل المتخصص للخزانات بجميع أنواعها.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-success ms-2"></i> تنظيف عميق ومتخصص</li>
                        <li><i class="fas fa-check text-success ms-2"></i> تعقيم بمواد آمنة</li>
                        <li><i class="fas fa-check text-success ms-2"></i> عزل حراري ومائي</li>
                        <li><i class="fas fa-check text-success ms-2"></i> فحص دوري لجودة المياه</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="text-center">
                    <div class="bg-success text-white rounded-circle p-4 mx-auto mb-4" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-wind fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">نظافة وصيانة المكيفات</h4>
                    <p class="text-muted mb-4">خدمات متكاملة لضمان كفاءة وأداء أنظمة التكييف مع توفير هواء نظيف وصحي لراحتك وصحة عائلتك.</p>
                    <ul class="list-unstyled text-start">
                        <li><i class="fas fa-check text-success ms-2"></i> تنظيف شامل للوحدات</li>
                        <li><i class="fas fa-check text-success ms-2"></i> استبدال الفلاتر</li>
                        <li><i class="fas fa-check text-success ms-2"></i> فحص مستوى التبريد</li>
                        <li><i class="fas fa-check text-success ms-2"></i> صيانة وقائية دورية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="bg-white rounded p-5 text-center shadow-sm">
                    <div class="row text-center">
                        <div class="col-6 mb-4">
                            <h3 class="display-4 fw-bold text-primary">1000+</h3>
                            <p class="text-muted">{{ __('messages.satisfied_customers') }}</p>
                        </div>
                        <div class="col-6 mb-4">
                            <h3 class="display-4 fw-bold text-primary">10+</h3>
                            <p class="text-muted">{{ __('messages.years_experience') }}</p>
                        </div>
                        <div class="col-6">
                            <h3 class="display-4 fw-bold text-primary">99%</h3>
                            <p class="text-muted">معدل الرضا</p>
                        </div>
                        <div class="col-6">
                            <h3 class="display-4 fw-bold text-primary">24/7</h3>
                            <p class="text-muted">{{ __('messages.emergency_service') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-primary mb-4">{{ __('messages.why_choose_us') }}</h2>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle p-2 ms-3">
                            <i class="fas fa-check"></i>
                        </div>
                        <span><strong>مرخص ومؤمن:</strong> مرخص بالكامل ومؤمن لراحة بالك</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle p-2 ms-3">
                            <i class="fas fa-check"></i>
                        </div>
                        <span><strong>تقديرات مجانية:</strong> عروض أسعار بدون التزام لجميع خدماتنا</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle p-2 ms-3">
                            <i class="fas fa-check"></i>
                        </div>
                        <span><strong>ضمان الرضا:</strong> رضا 100% أو سنصحح الأمر</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle p-2 ms-3">
                            <i class="fas fa-check"></i>
                        </div>
                        <span><strong>خدمة الطوارئ:</strong> متاحة على مدار الساعة للحالات العاجلة</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle p-2 ms-3">
                            <i class="fas fa-check"></i>
                        </div>
                        <span><strong>فريق متخصص:</strong> فنيون معتمدون وذوو خبرة عالية</span>
                    </div>
                </div>
                <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope ms-2"></i>{{ __('messages.get_quote') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
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
                <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+966-555-PURE-AIR') }}" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone ms-2"></i>{{ __('messages.call_now') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 