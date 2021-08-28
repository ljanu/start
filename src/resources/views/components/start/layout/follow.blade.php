{{-- component follow --}}
@props([
    'title',
    'description',
    'canonical',
    'content',
    'footer' => null,
    'scripts' =>null
])
<x-start::start.layout.welcome robots=" index,follow "
                               :title="$title"
                               :description="$description"
                               :canonical="$canonical"
                               :content="$content"
                               :footer="$footer"
                               :scripts="$scripts">

    {{--    <x-slot name="googleTagManager">--}}
    {{--        <x-tudy.google.tag-manager/>--}}
    {{--    </x-slot>--}}

    {{--    <x-slot name="googleAnalytic">--}}
    {{--        <x-tudy.google.analitic/>--}}
    {{--    </x-slot>--}}

    <x-slot name="nav">

    </x-slot>


</x-start::start.layout.welcome>
