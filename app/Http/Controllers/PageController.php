<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Post;

class PageController extends Controller
{
    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Generate XML sitemap.
     */
    public function sitemap()
    {
        $services = Service::active()->get();
        $posts = Post::published()->get();

        return response()->view('sitemap', compact('services', 'posts'))
            ->header('Content-Type', 'application/xml');
    }

    /**
     * Generate robots.txt.
     */
    public function robots()
    {
        $robots = "User-agent: *\nAllow: /\n\nSitemap: " . url('/sitemap.xml');
        
        return response($robots)->header('Content-Type', 'text/plain');
    }
}
