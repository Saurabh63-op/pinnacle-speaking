<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\Location;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $locations = Location::all();
        return view('contact', compact('locations'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:25',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactSubmission::create($data);

        return back()->with('success', "Thank you! We've received your request and our coach will reach out to you shortly.");
    }
}
