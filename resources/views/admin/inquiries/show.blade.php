@extends('layouts.app')

@section('title', __('messages.view') . ' - ' . $inquiry->subject)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.inquiry_details') }}</h4>
                    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary">
                        {{ __('messages.back_to_list') }}
                    </a>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">{{ __('messages.name') }}:</th>
                                    <td>{{ $inquiry->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.email') }}:</th>
                                    <td>{{ $inquiry->email }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.phone') }}:</th>
                                    <td>{{ $inquiry->phone ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.subject') }}:</th>
                                    <td>{{ $inquiry->subject }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.status') }}:</th>
                                    <td>
                                        @if($inquiry->status === 'new')
                                            <span class="badge bg-primary">{{ __('messages.new') }}</span>
                                        @elseif($inquiry->status === 'in_progress')
                                            <span class="badge bg-warning">{{ __('messages.in_progress') }}</span>
                                        @else
                                            <span class="badge bg-success">{{ __('messages.closed') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.created_at') }}:</th>
                                    <td>{{ $inquiry->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('admin.inquiries.update', $inquiry) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('messages.update_status') }}</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="new" {{ $inquiry->status === 'new' ? 'selected' : '' }}>{{ __('messages.new') }}</option>
                                        <option value="in_progress" {{ $inquiry->status === 'in_progress' ? 'selected' : '' }}>{{ __('messages.in_progress') }}</option>
                                        <option value="closed" {{ $inquiry->status === 'closed' ? 'selected' : '' }}>{{ __('messages.closed') }}</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    {{ __('messages.update_status') }}
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>{{ __('messages.message') }}</h5>
                            <div class="card">
                                <div class="card-body">
                                    {!! nl2br(e($inquiry->message)) !!}
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