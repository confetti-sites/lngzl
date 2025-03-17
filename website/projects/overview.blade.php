@php
    $perPage = 9;
    $page = request()->parameter('page') ?: 1;
    $offset = ($page - 1) * $perPage;
    $projectPage = newRoot(new \model\project_overview)->label('Blog');
    $projects = $projectPage->list('project')->columns(['title'])->limit($perPage)->offset($offset)->get();
@endphp

@extends('website.layouts.main')

@section('head_title', 'Blogs')

@section('content')
    <!-- Visit https://tailwindui.com/components/marketing/sections/blog-sections to explore a variety of blog sections -->
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">{{ $projectPage->text('title')->max(50)->default('Projecten') }}</h2>
                <p class="mt-2 text-lg/8 text-gray-600">{{ $projectPage->text('short_description')->max(200)->default('Voor meerdere klanten hebben wij in de afgelopen jaren projecten mogen uitvoeren. Op deze pagina kan je deze vinden.') }}</p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($projects as $project)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <a href="/projecten/{{ $project->text('slug') }}" class="block">
                            <h3 class="mt-4 text-xl font-semibold text-gray-900">{{ $project->text('title')->max(50) }}</h3>
                            {!! $project->image('image')->widthPx(800)->getPicture(class: 'relative w-full p-3 rounded-lg') !!}
                            <p class="mt-2 text-gray-600">{!! $project->text('short_description')->bar(['b', 'i', 'u'])->max(200) !!}</p>
                        </a>
                    </article>
                @endforeach
            </div>
            <div class="mt-8 flex justify-center">
                @if($page > 1)
                    <a href="{{ request()->uri() }}?page={{ $page-1 }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2">Previous</a>
                @endif
                @if(count($projects) === $perPage && $projectPage->projects()->offset($offset + 1)->first() !== null)
                    <a href="{{ request()->uri() }}?page={{ $page+1 }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Next</a>
                @endif
            </div>
        </div>
    </div>
@endsection