@extends('layouts.admin')

@section('title', 'KASA | Dashboard')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-8">
        <div class="bg-zinc-800 p-4 md:p-6 rounded-lg">
            <h2 class="text-lg md:text-xl font-semibold mb-2">Total Dramas</h2>
            <p class="text-2xl md:text-3xl font-bold text-red-500">{{ \App\Models\Drama::count() }}</p>
        </div>
    </div>
</div>
@endsection