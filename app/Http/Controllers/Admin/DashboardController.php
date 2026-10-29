<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\Course;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the main Admin Dashboard overview.
     */
    public function index(): View
    {
        $today = Carbon::today();

        $stats = [
            'total_leads'   => ContactSubmission::count(),
            'today_leads'   => ContactSubmission::whereDate('created_at', $today)->count(),
            'total_courses' => Course::count(),
            'total_posts'   => Post::count(),
        ];

        $recentLeads = ContactSubmission::latest()->take(8)->get();

        return view('admin.dashboard', compact('stats', 'recentLeads'));
    }
}
