@extends('layouts.app')

@section('title', __('messages.manage_services'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.manage_services') }}</h4>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                        {{ __('messages.add_new_service') }}
                    </a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.name') }}</th>
                                    <th>{{ __('messages.short_description') }}</th>
                                    <th>{{ __('messages.status') }}</th>
                                    <th>{{ __('messages.sort_order') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($services as $service)
                                    <tr>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ substr($service->short_description, 0, 50) }}{{ strlen($service->short_description) > 50 ? '...' : '' }}</td>
                                        <td>
                                            @if($service->is_active)
                                                <span class="badge bg-success">{{ __('messages.active') }}</span>
                                            @else
                                                <span class="badge bg-secondary">{{ __('messages.inactive') }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $service->sort_order }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.services.show', $service) }}" 
                                                   class="btn btn-sm btn-info">{{ __('messages.view') }}</a>
                                                <a href="{{ route('admin.services.edit', $service) }}" 
                                                   class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                                                <form action="{{ route('admin.services.destroy', $service) }}" 
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            data-confirm-message="{{ __('messages.confirm_delete') }}"
                                                            onclick="return confirm(this.dataset.confirmMessage)">
                                                        {{ __('messages.delete') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            {{ __('messages.no_services_found') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 