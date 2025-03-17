@php($hero = newRoot(new \model\homepage\hero)->label('Hero'))
<!-- Go to https://tailwindui.com/components/marketing/sections/heroes to get more amazing easy to use hero sections -->
<div class="relative isolate px-6 pt-14 lg:px-8 overflow-hidden" style="    background-image: url(/website/assets/images/headerz.png);
    background-position: top right;
    background-repeat: no-repeat;
    background-size: 40vw auto;z-index: 1000">
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex">
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600">
                {{ $hero->text('pill_text')->default('~ Al een prachtige website vanaf 99,- per maand excl. btw ~') }}
            </div>
        </div>
        <div class="">
            <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
                {{ $hero->text('title')->default('Het is tijd voor een nieuwe site') }}<span class="text-blue-500">.</span>
            </h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">{{ $hero->text('subtitle')->default('Inclusief hosting en onderhoud')->max(200) }}<span class="text-blue-500">.</span></p>
            <div class="mt-10 flex gap-x-6">
                <a href="/contact" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 cursor-pointer">{{ $hero->text('cta_text')->default('Contact') }}</a>
                <p class="text-sm/6 font-semibold mt-2 text-gray-900">of bel ons op <a href="tel:+31616116628"><strong style="color: black;">06 16 11 66 28</strong></a></p>
            </div>
        </div>
    </div>
</div>

