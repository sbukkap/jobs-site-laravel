@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Laracasts</a>
        <h3 class="text-xl mt-3 group-hover:text-blue-600 font-bold">Video Producer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>