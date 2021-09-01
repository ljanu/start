<x-start.layout.nofollow title="{{__('Dashboard')}}">
    
    <x-slot name="content">
        
        <h1>{{__('Dashboard')}}</h1>

        <form  method="POST" action="{{ route('logout') }}">
            @csrf

            <div class="flex flex-row justify-end">
                <button class="bg-gray-100 hover:bg-gray-100
                                    dark:bg-gray-900 hover:bg-gray-400
                                    border-none" type="submit"
                >

                    <svg class = "fill-current text-gray-800 dark:text-gray-100"
                         xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                         fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                    </svg>

                </button>
            </div>

        </form>

        <p>Stránka zatím nemá funkci!</p>

        <a href = "{{url("/")}}" >domů</a >
        
    </x-slot>
</x-start.layout.nofollow>


