@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 font-bold">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42"></x-employer-logo>
    </div>
</x-panel>