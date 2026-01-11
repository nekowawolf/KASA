@extends('layouts.blank')

@section('title', 'KASA | Korean Dramas')

@section('content')
<section class="bg-black">
    <div class="pl-8 md:pl-12 lg:pl-16">

        <div class="mt-16">
            <h2 class="text-xl md:text-3xl font-bold text-white mb-4">
                Korean Dramas
            </h2>
        </div>

        <div class="horizontal-scroll overflow-x-auto overflow-y-hidden pb-3">
            <div class="flex gap-3 pr-8 md:pr-12 lg:pr-16 w-max">

                @foreach ($dramas as $drama)
                    <x-drama-card 
                        :image="$drama->image"
                        :slug="$drama->slug"
                    />
                @endforeach

            </div>
        </div>

    </div>
</section>
@endsection