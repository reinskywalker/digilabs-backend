<?php

namespace App\Http\Controllers;

use App\Models\QaBootcamp;
use Illuminate\Http\Request;

class QaBootcampController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'has_whatsapp' => 'required|boolean',
            'experience' => 'required|integer|min:0|max:99',
            'expectation' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'regency' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'village' => 'required|string|max:255',
        ]);
        
        QaBootcamp::create($validatedData);
        

        return response()->json(['message' => 'QA Bootcamp registration successful']);
        return response()->json([
            'message' => 'Registration successful',
            'data' => $qaBootcamp
        ], 201);
    }
}
