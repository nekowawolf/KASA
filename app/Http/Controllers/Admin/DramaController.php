<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Drama;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DramaController extends Controller
{
    public function index()
    {
        $dramas = Drama::latest()->get();
        return view('admin.dramas.index', compact('dramas'));
    }

    public function create()
    {
        return view('admin.dramas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|url|max:500',
            'watch_url' => 'nullable|url|max:500',
        ]);

        Drama::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'release_year' => $validated['release_year'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'image' => $validated['image'] ?? null,
            'watch_url' => $validated['watch_url'] ?? null,
        ]);

        return redirect()->route('admin.dramas.index')->with('success', 'Drama added successfully!');
    }

    public function edit(Drama $drama)
    {
        return view('admin.dramas.edit', compact('drama'));
    }

    public function update(Request $request, Drama $drama)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|url|max:500',
            'watch_url' => 'nullable|url|max:500',
        ]);

        $drama->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'release_year' => $validated['release_year'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'image' => $validated['image'] ?? null,
            'watch_url' => $validated['watch_url'] ?? null,
        ]);

        return redirect()->route('admin.dramas.index')->with('success', 'Drama updated successfully!');
    }

    public function destroy(Drama $drama)
    {
        $drama->delete();
        return redirect()->route('admin.dramas.index')->with('success', 'Drama deleted successfully!');
    }
}