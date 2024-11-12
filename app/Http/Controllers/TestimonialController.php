<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_name' => 'required|string|max:255',
            'testimonial' => 'required|string',
        ]);

        Testimonial::create($request->only('parent_name', 'testimonial'));

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully!');
    }
}
