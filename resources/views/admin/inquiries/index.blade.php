@extends('layouts.app')

@section('title', __('messages.manage_inquiries'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.manage_inquiries') }}</h4>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.name') }}</th>
                                    <th>{{ __('messages.email') }}</th>
                                    <th>{{ __('messages.subject') }}</th>
                                    <th>{{ __('messages.status') }}</th>
                                    <th>{{ __('messages.created_at') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($inquiries as $inquiry)
                                    <tr>
                                        <td>{{ $inquiry->name }}</td>
                                        <td>{{ $inquiry->email }}</td>
                                        <td>{{ $inquiry->subject }}</td>
                                        <td>
                                            @if($inquiry->status === 'new')
                                                <span class="badge bg-primary">{{ __('messages.new') }}</span>
                                            @elseif($inquiry->status === 'in_progress')
                                                <span class="badge bg-warning">{{ __('messages.in_progress') }}</span>
                                            @else
                                                <span class="badge bg-success">{{ __('messages.closed') }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $inquiry->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.inquiries.show', $inquiry) }}" 
                                                   class="btn btn-sm btn-info">{{ __('messages.view') }}</a>
                                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" 
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
                                        <td colspan="6" class="text-center">
                                            {{ __('messages.no_inquiries_found') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $inquiries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 