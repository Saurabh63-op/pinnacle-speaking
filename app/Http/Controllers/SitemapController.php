<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $courses = Course::select('slug', 'updated_at')->get();
        $posts   = Post::select('slug', 'updated_at')->get();

        $content = view('sitemap', compact('courses', 'posts'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
