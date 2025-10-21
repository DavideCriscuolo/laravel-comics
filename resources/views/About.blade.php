@extends("./layouts/master")

@section("MainAbout")

<main class="bg-black text-white">
    @include("./components/jumbo")
    <div class="container h300 text-center">
        <h1>About — Laravel Comics</h1>

        <p>
            Questo progetto è una semplice applicazione di esempio sviluppata con Laravel per gestire e mostrare una collezione di fumetti.
        </p>
        <p>
            Tecnologie utilizzate: Laravel, Blade, Eloquent ORM e il sistema di routing di Laravel. Il layout è realizzato con componenti Blade e stili CSS per essere fruibile anche da dispositivi mobili.
        </p>

    </div>
</main>
@endsection