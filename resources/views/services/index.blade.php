@extends('layouts.app')

@section('title', __('messages.our_services') . ' - بيور إير')
@section('meta_description', __('messages.services_meta_description'))
@section('meta_keywords', __('messages.services_meta_keywords'))

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">{{ __('messages.our_professional_services') }}</h1>
                <p class="lead mb-0">{{ __('messages.comprehensive_air_solutions') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Grid -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="card service-card h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-wind fa-lg"></i>
                            </div>
                            <h4 class="card-title mb-0">{{ $service->name }}</h4>
                        </div>
                        <p class="card-text text-muted mb-4">{{ $service->short_description }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('services.show', $service) }}" class="btn btn-primary">
                                {{ __('messages.learn_more') }} <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($services->isEmpty())
        <div class="text-center py-5">
            <i class="fas fa-tools fa-4x text-muted mb-3"></i>
            <h3 class="text-muted">{{ __('messages.no_services_available') }}</h3>
            <p class="text-muted">{{ __('messages.check_back_later') }}</p>
            <a href="{{ route('contact.index') }}" class="btn btn-primary">{{ __('messages.contact_us') }}</a>
        </div>
        @endif
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 fw-bold text-primary mb-3">{{ __('messages.need_custom_solution') }}</h2>
                <p class="mb-0">{{ __('messages.custom_solution_text') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope me-2"></i>{{ __('messages.get_free_quote') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 