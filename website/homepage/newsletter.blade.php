@php($newsletter = newRoot(new \model\homepage\newsletter)->label('Newsletter'))
<!-- Go to https://tailwindui.com/components/marketing/sections/newsletter-sections to explore more templates for your next idea -->
<div class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $newsletter->text('title')->default('Subscribe to our newsletter') }}</h2>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">{{ $newsletter->text('subtitle')->default('Stay up to date with our latest news and articles.') }}</p>
                <div class="mt-6 flex max-w-md gap-x-4">
                    {!! $newsletter->tally('form')->embed() !!}
                </div>
            </div>
        </div>
    </div>
</div>