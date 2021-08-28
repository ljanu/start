{{-- component nofollow --}}
@props([
    'title',
    'content',
    'footer' => null,
    'scripts' =>null
])




<x-start::start.layout.welcome robots=" noindex,nofollow "
                :title="$title"
                :description="null"
                :canonical="null"
                :content="$content"
                :footer="$footer"
                :scripts="$scripts"
>


{{--    <x-slot name="nav">--}}

{{--    </x-slot>--}}

</x-start::start.layout.welcome>