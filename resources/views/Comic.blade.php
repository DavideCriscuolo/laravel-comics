@extends("./layouts/master")



@section("comic")

<main class="bg-black">
    @include("./../components/jumbo")

    <div class="container-fluid py-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src={{ $comic["thumb"] }}
                        class="img-fluid rounded-start"
                        alt="Card title" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">


                        <div class="py-2">
                            <h2 class="card-title m-0">{{ $comic["title"] }} </h2>
                        </div>
                        <div class="mb-3"><span class="badge bg-danger">Serie: {{ $comic["series"] }}</span> </div>
                        <div class="my-3">
                            <p class="card-text">
                                {{ $comic["description"] }}
                            </p>
                        </div>


                        <div class="d-flex gap-3 flex-wrap">
                            <div>
                                <h5>Artisti:</h5>
                                <ul class="list-unstyled"> @foreach ($comic["artists"] as $artist )
                                    <li>{{ $artist }}</li>
                                    @endforeach
                                </ul>


                            </div>
                            <div>
                                <h5>Scrittori:</h5>
                                <ul class="list-unstyled">
                                    @foreach ($comic["writers"] as $writer )
                                    <li>{{ $writer }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>

                        <div class="py-2">
                            <h4>Prezzo: {{ $comic["price"] }}</h4>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
@endsection