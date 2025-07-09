@extends('layouts.app')

@section('title', __('messages.admin_dashboard'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('messages.admin_dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('messages.services') }}</h5>
                                    <p class="card-text">{{ __('messages.manage_services') }}</p>
                                    <a href="{{ route('admin.services.index') }}" class="btn btn-light">{{ __('messages.view') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('messages.posts') }}</h5>
                                    <p class="card-text">{{ __('messages.manage_posts') }}</p>
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-light">{{ __('messages.view') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('messages.categories') }}</h5>
                                    <p class="card-text">{{ __('messages.manage_categories') }}</p>
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-light">{{ __('messages.view') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('messages.inquiries') }}</h5>
                                    <p class="card-text">{{ __('messages.manage_inquiries') }}</p>
                                    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-light">{{ __('messages.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-4">
                            <div class="card bg-secondary text-white">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('messages.settings') }}</h5>
                                    <p class="card-text">إدارة إعدادات الموقع</p>
                                    <a href="{{ route('admin.settings.index') }}" class="btn btn-light">{{ __('messages.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('messages.recent_activities') }}</div>
                                <div class="card-body">
                                    <p>{{ __('messages.welcome_admin') }}</p>
                                    <p>{{ __('messages.admin_dashboard_description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 