<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QABootcamp;
use Illuminate\Support\Str;

class QABootcampController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'regency' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'village' => 'required|string|max:100',
            'experience' => 'required|integer|max:99',
            'expectation' => 'required|string|max:255',
        ]);

        $bootcamp = QABootcamp::create([
            'id' => Str::uuid(),
            'name' => strtoupper($validatedData['name']),
            'province' => $validatedData['province'],
            'regency' => $validatedData['regency'],
            'district' => $validatedData['district'],
            'village' => $validatedData['village'],
            'experience' => $validatedData['experience'],
            'expectation' => $validatedData['expectation'],
        ]);

        return response()->json(['message' => 'Registration successful!', 'data' => $bootcamp], 201);
    }
}
