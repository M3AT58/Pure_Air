@extends('layouts.app')

@section('title', __('messages.view') . ' - ' . $post->title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.post_details') }}</h4>
                    <div>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                            {{ __('messages.edit') }}
                        </a>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">
                            {{ __('messages.back_to_list') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">{{ __('messages.title') }}:</th>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.slug') }}:</th>
                                    <td>{{ $post->slug }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.category') }}:</th>
                                    <td>{{ $post->category->name ?? __('messages.no_category') }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.author') }}:</th>
                                    <td>{{ $post->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.status') }}:</th>
                                    <td>
                                        @if($post->status === 'published')
                                            <span class="badge bg-success">{{ __('messages.published') }}</span>
                                        @else
                                            <span class="badge bg-secondary">{{ __('messages.draft') }}</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.published_at') }}:</th>
                                    <td>{{ $post->published_at ? $post->published_at->format('Y-m-d H:i') : '-' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>{{ __('messages.meta_information') }}</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">{{ __('messages.meta_title') }}:</th>
                                    <td>{{ $post->meta_title ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.meta_description') }}:</th>
                                    <td>{{ $post->meta_description ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.meta_keywords') }}:</th>
                                    <td>{{ $post->meta_keywords ?: '-' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>{{ __('messages.excerpt') }}</h5>
                            <div class="card">
                                <div class="card-body">
                                    {{ $post->excerpt }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <h5>{{ __('messages.body') }}</h5>
                            <div class="card">
                                <div class="card-body">
                                    {!! nl2br(e($post->body)) !!}
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