{{-- view index --}}
<x-start.layout.follow title="Skeleton"
                       description="home page skeleton"
                       canonical="https://localkost">

    <x-slot name="content">
        <h1 >Start</h1 >

        <a href = "{{route("start")}}" >základní typografie</a >
        <a href = "{{route("form")}}" >formulář</a >

    </x-slot>

</x-start.layout.follow>



