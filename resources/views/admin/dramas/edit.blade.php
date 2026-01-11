@extends('layouts.admin')

@section('title', 'Edit Drama - KASA')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-4 md:mb-6">
        <a href="{{ route('admin.dramas.index') }}" 
           class="text-gray-400 hover:text-white mb-3 md:mb-4 inline-block text-sm md:text-base">
            Back to Drama List
        </a>
        <h1 class="text-2xl md:text-3xl font-bold">Edit Drama: <span class="text-lg md:text-2xl">{{ $drama->title }}</span></h1>
    </div>

    <div class="bg-zinc-800 p-4 md:p-6 rounded-lg">
        <form action="{{ route('admin.dramas.update', $drama) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium mb-2">Drama Title *</label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{ old('title', $drama->title) }}"
                       required
                       class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">
                @error('title')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="release_year" class="block text-sm font-medium mb-2">Release Year *</label>
                <input type="number" 
                       id="release_year" 
                       name="release_year" 
                       value="{{ old('release_year', $drama->release_year) }}"
                       min="1900" 
                       max="{{ date('Y') }}"
                       required
                       class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">
                @error('release_year')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-sm font-medium mb-2">Genre *</label>
                <input type="text" 
                       id="genre" 
                       name="genre" 
                       value="{{ old('genre', $drama->genre) }}"
                       placeholder="e.g., Romance, Action, Comedy"
                       required
                       class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">
                @error('genre')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium mb-2">Description *</label>
                <textarea id="description" 
                          name="description" 
                          rows="5"
                          required
                          class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">{{ old('description', $drama->description) }}</textarea>
                @error('description')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium mb-2">Image URL</label>
                <input type="url" 
                       id="image" 
                       name="image" 
                       value="{{ old('image', $drama->image) }}"
                       placeholder="https://example.com/image.jpg"
                       class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">
                @error('image')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="watch_url" class="block text-sm font-medium mb-2">Watch URL</label>
                <input type="url" 
                       id="watch_url" 
                       name="watch_url" 
                       value="{{ old('watch_url', $drama->watch_url) }}"
                       placeholder="https://example.com/watch"
                       class="w-full px-4 py-2 rounded bg-zinc-900 text-white border border-zinc-700 focus:border-red-500 focus:outline-none">
                @error('watch_url')
                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                <button type="submit" 
                        class="bg-red-700 hover:bg-red-800 px-6 py-2 rounded w-full sm:w-auto">
                    Update Drama
                </button>
                <a href="{{ route('admin.dramas.index') }}" 
                   class="bg-zinc-700 hover:bg-zinc-600 px-6 py-2 rounded text-center w-full sm:w-auto">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection