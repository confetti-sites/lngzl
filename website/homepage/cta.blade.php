@php($cta = newRoot(new \model\homepage\cta)->label('CTA'))
<!-- Go to https://tailwindui.com/components/marketing/sections/cta-sections to get more templates for your product or service -->
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <div class="lg:w-1/2">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900  sm:text-4xl">
            {!! $cta->text('title')->bar(['b', 'i', 'u'])->max(150)->default('Jouw eigen website, razendsnel online.') !!}
        </h2>
        <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-gray-400">
            {!! $cta->text('content')->bar(['b', 'i', 'u'])->max(200) !!}
        </p>
    </div>
    <div class="lg:w-1/2 lg:pl-8">
        {!! $cta->image('image')->widthPx(960)->getPicture(class: 'w-[48rem] max-w-none rounded-xl ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0') !!}
    </div>
</div>
