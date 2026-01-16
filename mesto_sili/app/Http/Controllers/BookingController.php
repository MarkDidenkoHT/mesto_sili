<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'date'  => 'required|date',
            'time'  => 'required',
        ]);

        Booking::create($request->all());

        return back()->with('success', 'Booking submitted successfully!');
    }
}
