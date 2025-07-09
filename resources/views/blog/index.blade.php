@extends('layouts.app')

@section('title', __('messages.blog') . ' - بيور إير')
@section('meta_description', __('messages.blog_meta_description'))
@section('meta_keywords', __('messages.blog_meta_keywords'))

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">{{ __('messages.our_blog') }}</h1>
                <p class="lead mb-0">{{ __('messages.blog_subtitle') }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Blog Posts -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @forelse($posts as $post)
            <div class="col-lg-4 col-md-6">
                <article class="card h-100">
                    @if($post->featured_image)
                    <img src="{{ asset($post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            @if($post->category)
                            <span class="badge bg-primary">{{ $post->category->name }}</span>
                            @endif
                            <small class="text-muted">{{ $post->published_at->format('Y/m/d') }}</small>
                        </div>
                        <h5 class="card-title">
                            <a href="{{ route('blog.show', $post) }}" class="text-decoration-none text-dark">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="card-text text-muted">{{ $post->excerpt }}</p>
                        <div class="mt-auto">
                            <a href="{{ route('blog.show', $post) }}" class="btn btn-primary">
                                {{ __('messages.read_more') }} <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-blog fa-4x text-muted mb-3"></i>
                    <h3 class="text-muted">{{ __('messages.no_posts_available') }}</h3>
                    <p class="text-muted">{{ __('messages.check_back_for_posts') }}</p>
                </div>
            </div>
            @endforelse
        </div>
        
        @if($posts->hasPages())
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="h3 fw-bold text-primary mb-3">{{ __('messages.stay_updated') }}</h2>
                <p class="mb-4">{{ __('messages.newsletter_description') }}</p>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="{{ __('messages.enter_email') }}">
                    <button class="btn btn-primary" type="button">{{ __('messages.subscribe') }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 