@extends("./layouts/master")


@section("MainHome")
@php
$comics=config("comics");

@endphp
<main class="bg-black">
    @include("./components/jumbo")
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">

            @foreach($comics as $comic)
            <div class="col">

                <x-card>
                    <x-slot:id>{{ route("Comic",$comic["id"]) }}</x-slot:id>
                    <x-slot:thumb>{{$comic["thumb"]}}</x-slot:thumb>
                    <x-slot:title>{{ $comic["title"] }}</x-slot:title>
                    <x-slot:price>{{ $comic["price"] }}</x-slot:price>
                </x-card>
            </div>
            @endforeach
        </div>
    </div>
    @include("./components/banner")
</main>
@endsection