@php($newsletter = newRoot(new \model\homepage\newsletter)->label('Newsletter'))
<!-- Go to https://tailwindui.com/components/marketing/sections/newsletter-sections to explore more templates for your next idea -->
<div class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
                <h2 class="text-4xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $newsletter->text('title')->default('Subscribe to our newsletter') }}</h2>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">{{ $newsletter->text('subtitle')->default('Stay up to date with our latest news and articles.') }}</p>
                <div class="mt-6 flex max-w-md gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md/5 px-3.5 py-2 text-base text-gray-900 dark:text-black outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" placeholder="{{ $newsletter->text('placeholder')->default('Enter your email') }}">
                    <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 cursor-pointer">{{ $newsletter->text('button_text')->default('Subscribe') }}</button>
                </div>
            </div>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                @foreach($newsletter->list('feature')->columns(['title'])->min(1)->max(2)->get() as $feature)
                    <div class="flex flex-col items-start">
                        <dt class="mt-4 text-base font-semibold text-gray-900 dark:text-white">{{ $feature->text('title')->max(50) }}</dt>
                        <dd class="mt-2 text-base/7 text-gray-700 dark:text-gray-400">{{ $feature->text('description')->max(200) }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</div>