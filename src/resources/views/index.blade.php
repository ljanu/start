{{-- view index --}}
<x-start.layout.follow title="Skeleton"
                       description="home page skeleton"
                       canonical="https://localkost">

    <x-slot name="content">

        <h1 >Start</h1 >

        <ul >
            <li ><a href = "{{route("start")}}" >základní typografie</a ></li >
            <li ><a href = "{{route("form")}}" >formulář</a ></li >
        </ul >

    </x-slot>

</x-start.layout.follow>




