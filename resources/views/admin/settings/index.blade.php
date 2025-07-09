@extends('layouts.app')

@section('title', __('messages.settings') . ' - ' . __('messages.admin_dashboard'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.settings') }}</h4>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                        {{ __('messages.back_to_list') }}
                    </a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
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

                    <form action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Site Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-globe me-2"></i>{{ __('messages.site_information') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="site_title" class="form-label">{{ __('messages.site_title') }} *</label>
                                            <input type="text" class="form-control" id="site_title" name="site_title" 
                                                   value="{{ $settings['site_title']->value ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="google_analytics_id" class="form-label">{{ __('messages.google_analytics_id') }}</label>
                                            <input type="text" class="form-control" id="google_analytics_id" name="google_analytics_id" 
                                                   value="{{ $settings['google_analytics_id']->value ?? '' }}" 
                                                   placeholder="G-XXXXXXXXXX">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="gtm_id" class="form-label">{{ __('messages.gtm_id') }}</label>
                                            <input type="text" class="form-control" id="gtm_id" name="gtm_id" 
                                                   value="{{ $settings['gtm_id']->value ?? '' }}" 
                                                   placeholder="GTM-XXXXXXXXX">
                                            <div class="form-text">{{ __('messages.gtm_help') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Reserved for future tracking options -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="site_description" class="form-label">{{ __('messages.site_description') }} *</label>
                                    <textarea class="form-control" id="site_description" name="site_description" rows="3" required>{{ $settings['site_description']->value ?? '' }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="site_description_ar" class="form-label">{{ __('messages.site_description_ar') }} *</label>
                                    <textarea class="form-control" id="site_description_ar" name="site_description_ar" rows="3" required>{{ $settings['site_description_ar']->value ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Hero Section -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-home me-2"></i>{{ __('messages.hero_section') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="hero_title" class="form-label">{{ __('messages.hero_title') }} *</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" 
                                           value="{{ $settings['hero_title']->value ?? '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="hero_subtitle" class="form-label">{{ __('messages.hero_subtitle') }} *</label>
                                    <textarea class="form-control" id="hero_subtitle" name="hero_subtitle" rows="3" required>{{ $settings['hero_subtitle']->value ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-address-book me-2"></i>{{ __('messages.contact_info') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="contact_phone" class="form-label">{{ __('messages.phone') }} *</label>
                                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" 
                                                   value="{{ $settings['contact_phone']->value ?? '' }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="contact_email" class="form-label">{{ __('messages.email') }} *</label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" 
                                                   value="{{ $settings['contact_email']->value ?? '' }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_address" class="form-label">{{ __('messages.address') }} *</label>
                                    <textarea class="form-control" id="contact_address" name="contact_address" rows="2" required>{{ $settings['contact_address']->value ?? '' }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="contact_address_ar" class="form-label">{{ __('messages.address_ar') }} *</label>
                                    <textarea class="form-control" id="contact_address_ar" name="contact_address_ar" rows="2" required>{{ $settings['contact_address_ar']->value ?? '' }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="company_hours" class="form-label">{{ __('messages.business_hours') }} *</label>
                                    <textarea class="form-control" id="company_hours" name="company_hours" rows="4" required>{{ $settings['company_hours']->value ?? '' }}</textarea>
                                    <div class="form-text">{{ __('messages.business_hours_help') }}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5><i class="fas fa-share-alt me-2"></i>{{ __('messages.social_media') }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="whatsapp_number" class="form-label">{{ __('messages.whatsapp_number') }} *</label>
                                            <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number" 
                                                   value="{{ $settings['whatsapp_number']->value ?? '' }}" 
                                                   placeholder="966501234567" required>
                                            <div class="form-text">{{ __('messages.whatsapp_help') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="instagram_handle" class="form-label">{{ __('messages.instagram_handle') }} *</label>
                                            <input type="text" class="form-control" id="instagram_handle" name="instagram_handle" 
                                                   value="{{ $settings['instagram_handle']->value ?? '' }}" 
                                                   placeholder="pure_air2612" required>
                                            <div class="form-text">{{ __('messages.instagram_help') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-save me-2"></i>{{ __('messages.save_settings') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 