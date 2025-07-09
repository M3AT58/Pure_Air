@extends('layouts.app')

@section('title', $post->meta_title ?: $post->title . ' - بيور إير')
@section('meta_description', $post->meta_description ?: $post->excerpt)
@section('meta_keywords', $post->meta_keywords ?: 'مقالات الهواء النقي، ' . strtolower($post->title))

@section('content')
<!-- Page Header -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb text-white-50">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}" class="text-white-50">{{ __('messages.blog') }}</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $post->title }}</li>
                    </ol>
                </nav>
                <div class="mb-3">
                    @if($post->category)
                    <span class="badge bg-light text-primary">{{ $post->category->name }}</span>
                    @endif
                    <span class="text-white-50 ms-3">{{ $post->published_at->format('Y/m/d') }}</span>
                    @if($post->user)
                    <span class="text-white-50 ms-3">{{ __('messages.by') }} {{ $post->user->name }}</span>
                    @endif
                </div>
                <h1 class="display-4 fw-bold mb-3">{{ $post->title }}</h1>
                <p class="lead mb-0">{{ $post->excerpt }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Post Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Featured Image -->
                @if($post->featured_image)
                <div class="mb-5">
                    <img src="{{ asset($post->featured_image) }}" class="img-fluid rounded" alt="{{ $post->title }}">
                </div>
                @endif

                <!-- Post Content -->
                <div class="content mb-5">
                    {!! nl2br(e($post->body)) !!}
                </div>

                <!-- Tags -->
                @if(isset($post->tags) && $post->tags)
                <div class="mb-5">
                    <h4 class="h5 fw-bold text-primary mb-3">{{ __('messages.tags') }}</h4>
                    @foreach($post->tags as $tag)
                    <span class="badge bg-light text-primary me-2 mb-2">{{ $tag }}</span>
                    @endforeach
                </div>
                @endif

                <!-- Share Buttons -->
                <div class="mb-5">
                    <h4 class="h5 fw-bold text-primary mb-3">{{ __('messages.share_post') }}</h4>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . route('blog.show', $post)) }}" 
                           class="btn btn-success" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i>{{ __('messages.whatsapp') }}
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ route('blog.show', $post) }}" 
                           class="btn btn-info text-white" target="_blank">
                            <i class="fab fa-twitter me-2"></i>تويتر
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', $post) }}" 
                           class="btn btn-primary" target="_blank">
                            <i class="fab fa-facebook me-2"></i>فيسبوك
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Related Posts -->
                @if($relatedPosts && $relatedPosts->count() > 0)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-newspaper me-2"></i>{{ __('messages.related_posts') }}
                        </h5>
                        @foreach($relatedPosts as $relatedPost)
                        <div class="mb-3 pb-3 border-bottom">
                            <h6 class="mb-1">
                                <a href="{{ route('blog.show', $relatedPost) }}" class="text-decoration-none text-dark">
                                    {{ $relatedPost->title }}
                                </a>
                            </h6>
                            <small class="text-muted">{{ $relatedPost->published_at->format('Y/m/d') }}</small>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Contact Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-envelope me-2"></i>{{ __('messages.contact_us') }}
                        </h5>
                        <p class="card-text mb-4">{{ __('messages.contact_for_questions') }}</p>
                        <div class="d-grid gap-2">
                            <a href="{{ route('contact.index') }}" class="btn btn-primary">
                                <i class="fas fa-envelope me-2"></i>{{ __('messages.send_message') }}
                            </a>
                            <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+1-555-PURE-AIR') }}" class="btn btn-outline-primary">
                                <i class="fas fa-phone me-2"></i>{{ __('messages.call_now') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                @if($categories && $categories->count() > 0)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">
                            <i class="fas fa-list me-2"></i>{{ __('messages.categories') }}
                        </h5>
                        <div class="list-group list-group-flush">
                            @foreach($categories as $category)
                            <a href="{{ route('blog.index', ['category' => $category->slug]) }}" class="list-group-item list-group-item-action">
                                {{ $category->name }} ({{ $category->posts_count }})
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="h3 fw-bold text-primary mb-3">{{ __('messages.need_air_service') }}</h2>
                <p class="mb-0">{{ __('messages.professional_air_services') }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-tools me-2"></i>{{ __('messages.view_services') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection 