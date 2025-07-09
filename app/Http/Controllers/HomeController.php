<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Post;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get featured services (first 3 active services)
        $featuredServices = Service::active()->ordered()->take(3)->get();
        
        // Get latest 3 published blog posts
        $latestPosts = Post::published()->latest()->take(3)->get();
        
        // Get hero settings
        $heroTitle = Setting::get('hero_title', 'تنفس هواءً نقياً، عش بصحة');
        $heroSubtitle = Setting::get('hero_subtitle', 'خدمات احترافية لجودة الهواء لمنزلك وعملك.');
        
        return view('home', compact('featuredServices', 'latestPosts', 'heroTitle', 'heroSubtitle'));
    }
}
