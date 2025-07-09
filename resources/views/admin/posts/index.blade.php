@extends('layouts.app')

@section('title', __('messages.manage_posts'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.manage_posts') }}</h4>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                        {{ __('messages.add_new_post') }}
                    </a>
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
                                    <th>{{ __('messages.title') }}</th>
                                    <th>{{ __('messages.category') }}</th>
                                    <th>{{ __('messages.author') }}</th>
                                    <th>{{ __('messages.status') }}</th>
                                    <th>{{ __('messages.published_at') }}</th>
                                    <th>{{ __('messages.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->name ?? __('messages.no_category') }}</td>
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
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('admin.posts.show', $post) }}" 
                                                   class="btn btn-sm btn-info">{{ __('messages.view') }}</a>
                                                <a href="{{ route('admin.posts.edit', $post) }}" 
                                                   class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                                                <form action="{{ route('admin.posts.destroy', $post) }}" 
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
                                            {{ __('messages.no_posts_found') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 