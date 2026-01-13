@extends('layouts.app')

@section('title', 'KASA')

@section('content')
<section class="container mx-auto px-6 py-24 bg-gradient-to-b from-blue-800/40 to-black">
    <div class="text-center mt-16">
        <h1 class="mb-6 text-4xl font-bold tracking-tight leading-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Welcome to KASA
        </h1>

        <p class="mb-6 max-w-3xl mx-auto text-lg text-gray-400">
            KASA is a Korean drama streaming platform where you can watch curated series with seamless access and an enjoyable viewing experience.
        </p>

        <a href="/dramas"
            class="inline-flex items-center px-6 py-3 font-medium text-white rounded-lg"
            style="background-color:#A10B0B;">
            Explore Now
        </a>
    </div>
</section>
<section class="bg-black py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto grid gap-12 md:grid-cols-3">

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/335002706/s166/twinkling-watermelon.avif" alt="All in One" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-wide text-[#A10B0B] mb-2">
                    All in one place
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Complete Drama Details
                </h2>

                <p class="text-gray-400 text-sm">
                    Explore Korean dramas with complete information including synopsis,
                    genres, cast, ratings, and release year — all in one place.
                </p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/320028557/s166/home-school.avif" alt="Search Drama" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-wide text-[#A10B0B] mb-2">
                    One search
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Find Your Favorite Drama
                </h2>

                <p class="text-gray-400 text-sm">
                    Search Korean dramas easily by title, genre, or release year
                    and discover detailed information instantly.
                </p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/321667436/s166/family-by-choice.avif" alt="Drama Recommendations" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-widetext-[#A10B0B] mb-2">
                    Curated picks
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Recommended Dramas
                </h2>

                <p class="text-gray-400 text-sm">
                    Discover popular and editor-recommended Korean dramas to help
                    you decide what to watch next.
                </p>
            </div>

        </div>
    </div>
</section>
<section class="bg-black py-24">
    <div class="container mx-auto px-6">

        <div class="max-w-4xl ml-0 md:ml-56 mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Browse popular, trending, and upcoming Korean dramas
            </h2>

            <p class="text-gray-400 text-lg">
                Discover the most talked-about Korean dramas and explore what’s worth watching this week.
            </p>
        </div>

        <div class="bg-gray-900 rounded-2xl p-8 max-w-5xl mx-auto">

            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-semibold text-white">
                        Top 3 Dramas This Week
                    </h3>
                    <p class="text-sm text-gray-400">
                        The most popular Korean dramas right now
                    </p>
                </div>
                 <a href="/dramas" class="hidden md:inline text-sm text-[#A10B0B] hover:underline">
                    See more
                </a>
            </div>

            <div class="h-px bg-gray-800 mb-6"></div>

            <div class="space-y-6">

                <div class="flex items-center gap-4">
                    <span class="text-3xl font-bold text-gray-600 w-6">1</span>
                    <img src="https://images.justwatch.com/poster/340070498/s166/season-1.avif" alt="Drama 1"
                        class="w-20 h-28 object-cover rounded-lg">
                    <div>
                        <h4 class="text-white font-medium">
                            Love Me
                        </h4>
                        <p class="text-sm text-gray-400">
                            Romance
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-3xl font-bold text-gray-600 w-6">2</span>
                    <img src="https://images.justwatch.com/poster/317328747/s166/season-1.avif" alt="Drama 2"
                        class="w-20 h-28 object-cover rounded-lg">
                    <div>
                        <h4 class="text-white font-medium">
                            Taxi Driver
                        </h4>
                        <p class="text-sm text-gray-400">
                            Action
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-3xl font-bold text-gray-600 w-6">3</span>
                    <img src="https://images.justwatch.com/poster/330115674/s166/the-haunted-palace.avif" alt="Drama 3"
                        class="w-20 h-28 object-cover rounded-lg">
                    <div>
                        <h4 class="text-white font-medium">
                           The Haunted Palace
                        </h4>
                        <p class="text-sm text-gray-400">
                           Science-Fiction
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-black py-32 overflow-hidden">
    <div class="container mx-auto px-6">

        <div class="max-w-3xl mx-auto text-center mb-20">
            <p class="text-[#A10B0B] text-lg font-medium mb-3">
                Find your K-Drama
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Discover Korean dramas
            </h2>

            <p class="text-gray-400 text-lg">
                Explore detailed drama information, trending titles, and curated recommendations anytime, anywhere — all on KASA.
            </p>
        </div>

        <div class="space-y-10">

            <div class="overflow-hidden">
                <ul class="flex gap-6 w-max animate-marquee-left">
                    @for ($i = 0; $i < 2; $i++)
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251126/1122/P001776433.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251021/1250/P001776344.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251114/0230/P001779124.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251016/0740/P001777791.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20241211/0803/P001765388.jpg" class="poster" /></li>
                    @endfor
                </ul>
            </div>

            <div class="overflow-hidden">
                <ul class="flex gap-6 w-max animate-marquee-right">
                    @for ($i = 0; $i < 2; $i++)
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251202/0740/P001779875.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251126/0005/P001779606.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251217/0220/P001750989.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251124/0611/P001779293.jpg" class="poster" /></li>
                        <li><img src="https://image.tving.com/ntgs/contents/CTC/caip/CAIP1500/ko/20251211/0550/P001780197.jpg" class="poster" /></li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-black py-24">
    <div class="container mx-auto px-6 text-center">
        <div class="mx-auto mb-6 w-24 h-24 rounded-lg overflow-hidden">
            <img src="/img/kasa.png" alt="KASA Logo" class="w-full h-full object-cover">
        </div>
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6">
            Find the best Korean dramas on KASA
        </h2>
        <div class="flex justify-center">
            <a href="/dramas" 
                class="bg-[#A10B0B] hover:bg-[#8B0909] text-white font-semibold px-8 py-3 rounded-lg transition inline-block">
                    Discover K-Drama Now
            </a>
        </div>
    </div>
</section>
home.blade.php
<section class="bg-black py-24">
  <div class="container mx-auto px-6 text-center">

    <h2 class="text-3xl md:text-4xl font-bold text-white mb-12">
        Frequently Asked <span class="text-[#A10B0B]">Questions</span>
    </h2>
    <div id="faq-accordion" class="max-w-3xl mx-auto space-y-4 text-left">
      <div class="border border-gray-700 rounded-lg overflow-hidden">
        <button type="button"
                class="w-full px-6 py-4 text-gray-400 font-medium flex justify-between items-center hover:text-white transition"
                data-accordion-target="#faq1" aria-expanded="false">
          <span>Can I watch K-dramas for free on KASA?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq1" class="px-6 py-4 text-gray-400 hidden">
          Yes! KASA provides links to watch popular Korean dramas for free from legal streaming sources.
        </div>
      </div>

      <div class="border border-gray-700 rounded-lg overflow-hidden">
        <button type="button"
                class="w-full px-6 py-4 text-gray-400 font-medium flex justify-between items-center hover:text-white transition"
                data-accordion-target="#faq2" aria-expanded="false">
          <span>Do I need to create an account?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq2" class="px-6 py-4 text-gray-400 hidden">
          No account is required to browse dramas and watch via the links. Accounts are optional for saving favorites.
        </div>
      </div>

      <div class="border border-gray-700 rounded-lg overflow-hidden">
        <button type="button"
                class="w-full px-6 py-4 text-gray-400 font-medium flex justify-between items-center hover:text-white transition"
                data-accordion-target="#faq3" aria-expanded="false">
          <span>Can I watch on mobile or tablet?</span>
          <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="faq3" class="px-6 py-4 text-gray-400 hidden">
          Absolutely! KASA is fully responsive and works on all devices, including smartphones, tablets, and desktops.
        </div>
      </div>
    </div>
  </div>
</section>
@endsection