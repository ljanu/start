{{-- view index --}}
<x-start.layout.follow title="Skeleton"
                       description="home page skeleton"
                       canonical="https://localkost">

    <x-slot name="content">
        <h1 >Formuláře</h1 >

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



