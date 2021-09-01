{{-- component form login and logout users --}}

@if (Route::has('login'))
    <div class = "flex flex-row justify-end mt-20 border-t border-gray-300 dark:border-gray-700 text-right px-6 py-4 " >
        @auth

            <a href = "{{ url('/dashboard') }}" class = "flex flex-row text-sm text-gray-700 underline" >

                {{-- svg dashboard --}}
                <svg
                        class = "fill-current text-gray-800 dark:text-gray-100"
                        xmlns = "http://www.w3.org/2000/svg"
                        height = "24px" viewBox = "0 0 24 24" width = "24px"
                        fill = "#000000" >
                    <path d = "M0 0h24v24H0z" fill = "none" />
                    <path d = "M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                </svg >
                <span class="mx-2">{{__('Dashboard')}}</span >

            </a >

        @else

            <a href = "{{ route('login') }}" class = "flex flex-row text-sm text-gray-700 underline" >

                {{-- svg login --}}
                <svg
                        class = "fill-current text-gray-800 dark:text-gray-100"
                        xmlns = "http://www.w3.org/2000/svg" height = "24px"
                        viewBox = "0 0 24 24" width = "24px" fill = "#000000" >
                    <g >
                        <rect fill = "none" height = "24" width = "24" />
                    </g >
                    <g >
                        <path d = "M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
                    </g >
                </svg >
                <div class="mx-2" >{{__('Log in')}}</div >

            </a >

            @if (Route::has('register'))

                <a href = "{{ route('register') }}" class = "flex flex-row ml-4 text-sm text-gray-700 underline" >

                    {{-- svg register --}}
                    <svg
                            class = "fill-current text-gray-800 dark:text-gray-100"
                            xmlns = "http://www.w3.org/2000/svg" height = "24px"
                            viewBox = "0 0 24 24" width = "24px" fill = "#000000" >
                        <g >
                            <rect fill = "none" height = "24" width = "24" />
                        </g >
                        <g >
                            <g >
                                <rect height = "4" width = "4" x = "10" y = "4" />
                                <rect height = "4" width = "4" x = "4" y = "16" />
                                <rect height = "4" width = "4" x = "4" y = "10" />
                                <rect height = "4" width = "4" x = "4" y = "4" />
                                <polygon points = "14,12.42 14,10 10,10 10,14 12.42,14" />
                                <path d = "M20.88,11.29l-1.17-1.17c-0.16-0.16-0.42-0.16-0.58,0L18.25,11L20,12.75l0.88-0.88C21.04,11.71,21.04,11.45,20.88,11.29z" />
                                <polygon points = "11,18.25 11,20 12.75,20 19.42,13.33 17.67,11.58" />
                                <rect height = "4" width = "4" x = "16" y = "4" />
                            </g >
                        </g >
                    </svg >
                    <span class="mx-2" >{{__('Register')}}</span >

                </a >

            @endif
        @endauth
    </div >
@endif