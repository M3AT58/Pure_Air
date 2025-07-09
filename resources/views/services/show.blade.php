@extends('layouts.app')

@section('title', $service->meta_title ?: $service->name . ' - بيور إير')
@section('meta_description', $service->meta_description ?: $service->short_description)
@section('meta_keywords', $service->meta_keywords ?: 'جودة الهواء، ' . strtolower($service->name))

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb text-white-50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services.index') }}" class="text-white-50">{{ __('messages.services') }}</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $service->name }}</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold mb-3">{{ $service->name }}</h1>
                <p class="lead mb-0">{{ $service->short_description }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Service Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Service Images -->
                @if($service->images && count($service->images) > 0)
                <div class="mb-5">
                    <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                            @foreach($service->images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $service->name }}" style="height: 400px; object-fit: cover;">
                            </div>
                            @endforeach
                        </div>
                        @if(count($service->images) > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('messages.previous') }}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('messages.next') }}</span>
                        </button>
                        @endif
                    </div>
                </div>
                @endif

                <!-- Service Description -->
                <div class="mb-5">
                    <h2 class="h3 fw-bold text-primary mb-4">{{ __('messages.service_details') }}</h2>
                    <div class="content">
                        {!! nl2br(e($service->full_description)) !!}
                    </div>
                </div>

                <!-- Benefits Section -->
                <div class="mb-5">
                    <h3 class="h4 fw-bold text-primary mb-4">{{ __('messages.why_choose_service') }}</h3>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>{{ __('messages.professional_technicians') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>{{ __('messages.eco_friendly_solutions') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>{{ __('messages.state_of_art_equipment') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>{{ __('messages.satisfaction_guarantee') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Contact Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-phone me-2"></i>{{ __('messages.get_free_quote') }}
                        </h5>
                        <p class="card-text mb-4">{{ __('messages.ready_to_improve_air') }}</p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('contact.index') }}" class="btn btn-primary">
                                <i class="fas fa-envelope me-2"></i>{{ __('messages.contact_us') }}
                            </a>
                            <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR') }}" class="btn btn-outline-primary">
                                <i class="fas fa-phone me-2"></i>{{ __('messages.call_now') }}
                            </a>
                            <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp_number', '15551234567') }}?text={{ urlencode(__('messages.whatsapp_service_inquiry') . ' ' . $service->name) }}" 
                               class="btn btn-success" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>{{ __('messages.whatsapp') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-clock me-2"></i>{{ __('messages.business_hours') }}
                        </h5>
                        <div class="small">
                            {!! nl2br(e(\App\Models\Setting::get('company_hours', 'Monday - Friday: 8:00 AM - 6:00 PM\nSaturday: 9:00 AM - 4:00 PM\nSunday: Closed'))) !!}
                        </div>
                    </div>
                </div>

                <!-- Other Services -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-list me-2"></i>{{ __('messages.other_services') }}
                        </h5>
                        <div class="list-group list-group-flush">
                            @foreach(\App\Models\Service::active()->where('id', '!=', $service->id)->ordered()->get() as $otherService)
                            <a href="{{ route('services.show', $otherService) }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-wind me-2 text-primary"></i>{{ $otherService->name }}
                            </a>
                            @endforeach
                        </div>
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
                <h2 class="h3 fw-bold text-primary mb-3">{{ __('messages.ready_to_start') }}</h2>
                <p class="mb-0">{{ __('messages.dont_wait_improve_air') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope me-2"></i>{{ __('messages.get_your_free_quote') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 