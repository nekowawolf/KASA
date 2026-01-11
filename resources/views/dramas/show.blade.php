@extends('layouts.blank')

@section('title', $drama->title)

@section('content')
<section class="bg-black min-h-screen flex items-center">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10">

        <div class="flex justify-center">
            <img 
                src="{{ $drama->image }}" 
                alt="{{ $drama->title }}"
                class="rounded-2xl w-[180px] sm:w-[220px] md:w-[320px] shadow-lg"
            >
        </div>

        <div class="text-white flex flex-col justify-center text-center md:text-left">

           <h1 class="text-2xl md:text-4xl font-bold mb-3">
                {{ $drama['title'] }}
                <span class="text-xs md:text-lg text-gray-500">
                    ({{ $drama['release_year'] }})
                </span>
            </h1>

            <p class="text-xs md:text-sm uppercase tracking-wide text-gray-400 mb-3">
                {{ $drama->genre }}
            </p>

            <p class="text-gray-300 leading-relaxed mb-6 text-sm md:text-base md:max-w-xl">
                {{ $drama->description }}
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a 
                    href="{{ $drama->watch_url }}" 
                    target="_blank"
                    class="bg-[#A10B0B] hover:bg-[#8B0909] transition px-6 py-3 rounded-lg font-semibold"
                >
                    Watch Now
                </a>

                <a 
                    href="{{ url('/dramas') }}"
                    class="border border-gray-600 hover:border-white transition px-6 py-3 rounded-lg"
                >
                    Back
                </a>
            </div>

        </div>

    </div>
</section>
@endsection