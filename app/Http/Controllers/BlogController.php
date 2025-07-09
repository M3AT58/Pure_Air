<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of blog posts.
     */
    public function index(Request $request)
    {
        $query = Post::published()->latest();
        
        // Filter by category if provided
        if ($request->has('category') && $request->category) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('body', 'like', "%{$search}%");
            });
        }
        
        $posts = $query->with(['category', 'user'])->paginate(10);
        $categories = Category::has('posts')->get();
        
        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(Post $post)
    {
        if ($post->status !== 'published' || $post->published_at > now()) {
            abort(404);
        }
        
        // Get related posts from the same category
        $relatedPosts = Post::published()
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();
            
        // Get categories for sidebar
        $categories = Category::has('posts')->withCount('posts')->get();
        
        return view('blog.show', compact('post', 'relatedPosts', 'categories'));
    }
}
