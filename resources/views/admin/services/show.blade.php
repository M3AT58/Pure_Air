@extends('layouts.app')

@section('title', __('messages.view') . ' - ' . $service->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.service_details') }}</h4>
                    <div>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">
                            {{ __('messages.edit') }}
                        </a>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                            {{ __('messages.back_to_list') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">{{ __('messages.name') }}:</th>
                                    <td>{{ $service->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.slug') }}:</th>
                                    <td>{{ $service->slug }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.status') }}:</th>
                                    <td>
                                        @if($service->is_active)
                                            <span class="badge bg-success">{{ __('messages.active') }}</span>
                                        @else
                                            <span class="badge bg-secondary">{{ __('messages.inactive') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.sort_order') }}:</th>
                                    <td>{{ $service->sort_order }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.created_at') }}:</th>
                                    <td>{{ $service->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.updated_at') }}:</th>
                                    <td>{{ $service->updated_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>{{ __('messages.meta_information') }}</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">{{ __('messages.meta_title') }}:</th>
                                    <td>{{ $service->meta_title ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.meta_description') }}:</th>
                                    <td>{{ $service->meta_description ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.meta_keywords') }}:</th>
                                    <td>{{ $service->meta_keywords ?: '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>{{ __('messages.short_description') }}</h5>
                            <div class="card">
                                <div class="card-body">
                                    {{ $service->short_description }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>{{ __('messages.full_description') }}</h5>
                            <div class="card">
                                <div class="card-body">
                                    {!! nl2br(e($service->full_description)) !!}
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