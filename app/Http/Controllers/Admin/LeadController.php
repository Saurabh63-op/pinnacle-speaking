<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LeadController extends Controller
{
    /**
     * List all student inquiries/leads.
     */
    public function index(Request $request): View
    {
        $query = ContactSubmission::latest();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $leads = $query->paginate(15)->withQueryString();

        return view('admin.leads.index', compact('leads'));
    }

    /**
     * Delete a contact inquiry.
     */
    public function destroy(int $id): RedirectResponse
    {
        $lead = ContactSubmission::findOrFail($id);
        $lead->delete();

        return back()->with('success', 'Lead deleted successfully.');
    }
}
