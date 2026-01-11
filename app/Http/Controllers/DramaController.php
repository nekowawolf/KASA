<?php

namespace App\Http\Controllers;

use App\Models\Drama;

class DramaController extends Controller
{
    public function index()
    {
        $dramas = Drama::all();
        return view('dramas.index', compact('dramas'));
    }

    public function show($slug)
    {
        $drama = Drama::where('slug', $slug)->firstOrFail();

        return view('dramas.show', compact('drama'));
    }
}