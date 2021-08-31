{{-- view index --}}
<x-start.layout.follow title="Skeleton"
                       description="home page skeleton"
                       canonical="https://localkost">

    <x-slot name="content">
        <h1 >základní typografie</h1 >
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

        <table id="table1" class="table">
            <tr>
                <th>title1</th>
                <th>title2</th>
                <th>title3</th>
            </tr>
            <tr>
                <td>cell1</td>
                <td>cell2</td>
                <td>cell3</td>
            </tr>
            <tr>
                <td>cell4</td>
                <td>cell5</td>
                <td>cell6</td>
            </tr>
        </table>

        {{-- form --}}
        <h2>form</h2>
        <form action="" method="get" class="form-example">

            {{-- input --}}
            <fieldset >
                <legend >input</legend >
                <div class="form-example">
                    <label for="name">Enter your name: </label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="form-example">
                    <label for="email">Enter your email: </label>
                    <input type="number" name="email" id="email" required>
                </div>
            </fieldset >

            {{-- radio --}}
            <fieldset>
                <legend>Title</legend>
                <label><input type="radio" name="radio"> Select me</label>
            </fieldset>

            {{-- select --}}
            <fieldset >
                <legend >Select</legend >
                <label for="pet-select">Choose a pet:</label>

                <select name="pets" id="pet-select">
                    <option value="">--Please choose an option--</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="spider">Spider</option>
                    <option value="goldfish">Goldfish</option>
                </select>
            </fieldset >

            {{-- check box --}}
            <fieldset >
                <legend >checkbox</legend >
                <label for="scales">Scales</label>
                <input type="checkbox" id="scales" name="scales"
                       checked>
                <input type="checkbox" id="horns" name="horns">
                <label for="horns">Horns</label>
            </fieldset >

            {{-- file --}}
            <fieldset >
                <legend >file</legend >
                <label for="avatar">Choose a profile picture:</label>

                <input type="file"
                       id="avatar" name="avatar"
                       accept="image/png, image/jpeg">
            </fieldset >


            <div class="form-example">
                <input type="submit" value="Subscribe!">
            </div>
        </form>

    </x-slot>

</x-start.layout.follow>



