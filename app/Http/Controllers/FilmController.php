<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'rating' => 'required|string|max:225',
    //         'kategori' => 'required|string|max:2225',
    //         'durasi' => 'required|string|max:225',
    //         'judul' => 'required|string|max:225',
    //         'kategori' => 'required|string|max:225',
    //     ]);

    //     return Film::create($validatedData);
    // }
}
