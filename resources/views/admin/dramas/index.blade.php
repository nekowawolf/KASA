@extends('layouts.admin')

@section('title', 'KASA | Manage Dramas')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-4 md:mb-6">
        <h1 class="text-2xl md:text-3xl font-bold">Manage Dramas</h1>
        <a href="{{ route('admin.dramas.create') }}" 
           class="bg-red-700 hover:bg-red-800 px-4 md:px-6 py-2 rounded text-sm md:text-base w-full sm:w-auto text-center">
            Add New Drama
        </a>
    </div>

    @if($dramas->count() > 0)
        <div class="hidden md:block bg-zinc-800 rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-zinc-900">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Year</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Genre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-700">
                        @foreach($dramas as $drama)
                            <tr class="hover:bg-zinc-700">
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium">{{ $drama->title }}</div>
                                    <div class="text-xs text-gray-400">{{ Str::limit($drama->description, 50) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $drama->release_year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $drama->genre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.dramas.edit', $drama) }}" 
                                           class="text-blue-400 hover:text-blue-300">Edit</a>
                                        <form action="{{ route('admin.dramas.destroy', $drama) }}" 
                                              method="POST" 
                                              class="inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="md:hidden space-y-4">
            @foreach($dramas as $drama)
                <div class="bg-zinc-800 p-4 rounded-lg">
                    <div class="mb-3">
                        <h3 class="text-lg font-semibold mb-1">{{ $drama->title }}</h3>
                        <p class="text-sm text-gray-400">{{ Str::limit($drama->description, 80) }}</p>
                    </div>
                    <div class="flex items-center justify-between text-sm mb-3">
                        <div>
                            <span class="text-gray-400">Year:</span>
                            <span class="ml-1">{{ $drama->release_year }}</span>
                        </div>
                        <div>
                            <span class="text-gray-400">Genre:</span>
                            <span class="ml-1">{{ $drama->genre }}</span>
                        </div>
                    </div>
                    <div class="flex space-x-3 pt-3 border-t border-zinc-700">
                        <a href="{{ route('admin.dramas.edit', $drama) }}" 
                           class="flex-1 bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-center text-sm">
                            Edit
                        </a>
                        <form action="{{ route('admin.dramas.destroy', $drama) }}" 
                              method="POST" 
                              class="flex-1 delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="bg-zinc-800 p-6 md:p-8 rounded-lg text-center">
            <p class="text-gray-400 mb-4">No dramas have been added yet.</p>
            <a href="{{ route('admin.dramas.create') }}" 
               class="inline-block bg-red-700 hover:bg-red-800 px-6 py-2 rounded">
                Add First Drama
            </a>
        </div>
    @endif
</div>
@endsection