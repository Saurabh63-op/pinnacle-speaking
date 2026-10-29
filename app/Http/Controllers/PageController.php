<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::all();
        $previewCourses = Course::whereIn('slug', [
            'career-focused-communication', 'young-orator', 'custom-communication-coaching',
        ])->get();

        return view('home', compact('testimonials', 'previewCourses'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function gallery()
    {
        return view('gallery');
    }
}
