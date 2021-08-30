{{-- view index --}}
<x-start.layout.follow title="Skeleton"
                       description="home page skeleton"
                       canonical="https://localkost">

    <x-slot name="content">
        <h1 >typografie</h1 >
        <p >zobrazení základního vzhledu aplikací. Soubor start.css</p >
        
        {{-- headings --}}    
        <div>
            <h1 >h1</h1 >

            <p >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                placerat eleifend leo.
            </p >

            <h2 >h2</h2 >

            <p >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                placerat eleifend leo.
            </p >

            <h3 >h3</h3 >
            <p >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                placerat eleifend leo.
            </p >
        </div>
        
        {{-- lists --}}
        <div>
            <h2>definiční seznam</h2>

            <dl>
                <dt>Definition list</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</dd>
                <dt>Lorem ipsum dolor sit amet</dt>
                <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</dd>
            </dl>

            <h2>tříděný seznam</h2>

            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ul>

            <h2>číslovaný sezmam</h2>

            <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Vestibulum auctor dapibus neque.</li>
            </ol>

        </div>

        {{-- table --}}
        <h2>table</h2>

    </x-slot>

</x-start.layout.follow>



