@extends('layouts.app')

@section('title', 'تواصل معنا - بيور إير')
@section('meta_description', 'تواصل مع بيور إير للحصول على خدمات جودة الهواء الاحترافية. اتصل أو راسلنا أو املأ نموذج التواصل للحصول على استشارة مجانية.')
@section('meta_keywords', 'تواصل بيور إير، استشارة جودة الهواء، عرض سعر مجاني، خدمات التهوية')

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">{{ __('messages.contact_us') }}</h1>
                <p class="lead mb-0">{{ __('messages.contact_subtitle') }}</p>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold text-primary mb-4">{{ __('messages.contact_form') }}</h2>
                        
                        @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle ms-2"></i>{{ __('messages.message_sent') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">{{ __('messages.name') }} *</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">{{ __('messages.email') }} *</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">{{ __('messages.phone') }}</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label">{{ __('messages.subject') }} *</label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">اختر الموضوع</option>
                                        <option value="تنظيف مجاري الهواء" {{ old('subject') == 'تنظيف مجاري الهواء' ? 'selected' : '' }}>تنظيف مجاري الهواء</option>
                                        <option value="صيانة أنظمة التهوية" {{ old('subject') == 'صيانة أنظمة التهوية' ? 'selected' : '' }}>صيانة أنظمة التهوية</option>
                                        <option value="اختبار جودة الهواء" {{ old('subject') == 'اختبار جودة الهواء' ? 'selected' : '' }}>اختبار جودة الهواء</option>
                                        <option value="استفسار عام" {{ old('subject') == 'استفسار عام' ? 'selected' : '' }}>استفسار عام</option>
                                        <option value="أخرى" {{ old('subject') == 'أخرى' ? 'selected' : '' }}>أخرى</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">{{ __('messages.message') }} *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane ms-2"></i>{{ __('messages.send_message') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <!-- Contact Details -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary mb-4">
                            <i class="fas fa-info-circle ms-2"></i>{{ __('messages.contact_info') }}
                        </h4>
                        
                        <div class="mb-3">
                            <h6 class="fw-semibold">{{ __('messages.phone') }}</h6>
                            <p class="mb-0">
                                <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+966-50-123-4567') }}" class="text-decoration-none">
                                    <i class="fas fa-phone ms-2 text-primary"></i>{{ \App\Models\Setting::get('contact_phone', '+966-50-123-4567') }}
                                </a>
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-semibold">{{ __('messages.email') }}</h6>
                            <p class="mb-0">
                                <a href="mailto:{{ \App\Models\Setting::get('contact_email', 'info@pureair.sa') }}" class="text-decoration-none">
                                    <i class="fas fa-envelope ms-2 text-primary"></i>{{ \App\Models\Setting::get('contact_email', 'info@pureair.sa') }}
                                </a>
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="fw-semibold">{{ __('messages.address') }}</h6>
                            <p class="mb-0">
                                <i class="fas fa-map-marker-alt ms-2 text-primary"></i>{{ \App\Models\Setting::get('contact_address', 'شارع الملك فهد، الرياض، المملكة العربية السعودية') }}
                            </p>
                        </div>

                        <div class="mb-0">
                            <h6 class="fw-semibold">واتساب</h6>
                            <p class="mb-0">
                                <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp_number', '966501234567') }}?text={{ urlencode(__('messages.whatsapp_text')) }}" target="_blank" class="text-decoration-none">
                                    <i class="fab fa-whatsapp ms-2 text-success"></i>تحدث معنا على واتساب
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary mb-4">
                            <i class="fas fa-clock ms-2"></i>{{ __('messages.business_hours') }}
                        </h4>
                        <div>
                            <strong>{{ __('messages.mon_fri') }}:</strong> 8:00 صباحاً - 6:00 مساءً<br>
                            <strong>{{ __('messages.saturday') }}:</strong> 9:00 صباحاً - 4:00 مساءً<br>
                            <strong>السبت:</strong> {{ __('messages.closed') }}
                        </div>
                        <hr>
                        <p class="small text-muted mb-0">
                            <i class="fas fa-exclamation-circle ms-1"></i>
                            خدمات الطوارئ متاحة على مدار الساعة
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bold text-primary mb-4">
                            <i class="fas fa-share-alt ms-2"></i>{{ __('messages.follow_us') }}
                        </h4>
                        <div class="d-flex gap-3">
                            <a href="https://instagram.com/{{ \App\Models\Setting::get('instagram_handle', 'pure_air2612') }}" target="_blank" class="btn btn-outline-primary">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp_number', '966501234567') }}" target="_blank" class="btn btn-outline-success">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                        <p class="small text-muted mt-2 mb-0">
                            {{ __('messages.follow_us') }} &#64;{{ \App\Models\Setting::get('instagram_handle', 'pure_air2612') }} {{ __('messages.instagram_tips_updates') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 fw-bold text-primary mb-3">تفضل الاتصال؟</h2>
                <p class="mb-0">تحدث مباشرة مع متخصصي جودة الهواء المعتمدين لدينا. نحن هنا للإجابة على أسئلتك وتقديم المساعدة الفورية.</p>
            </div>
            <div class="col-lg-4 text-lg-start">
                <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+966-50-123-4567') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-phone ms-2"></i>{{ __('messages.call_now') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 