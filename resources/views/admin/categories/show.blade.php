@extends('layouts.app')

@section('title', __('messages.view') . ' - ' . $category->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.category_details') }}</h4>
                    <div>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning">
                            {{ __('messages.edit') }}
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
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
                                    <td>{{ $category->name }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.slug') }}:</th>
                                    <td>{{ $category->slug }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.posts_count') }}:</th>
                                    <td>{{ $posts->total() }}</td>
                                </tr>
                                <tr>
                                    <th>{{ __('messages.created_at') }}:</th>
                                    <td>{{ $category->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    @if($posts->count() > 0)
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>{{ __('messages.posts_in_category') }}</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>{{ __('messages.title') }}</th>
                                                <th>{{ __('messages.author') }}</th>
                                                <th>{{ __('messages.status') }}</th>
                                                <th>{{ __('messages.published_at') }}</th>
                                                <th>{{ __('messages.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->user->name }}</td>
                                                    <td>
                                                        @if($post->status === 'published')
                                                            <span class="badge bg-success">{{ __('messages.published') }}</span>
                                                        @else
                                                            <span class="badge bg-secondary">{{ __('messages.draft') }}</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : '-' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-info">
                                                            {{ __('messages.view') }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $posts->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 