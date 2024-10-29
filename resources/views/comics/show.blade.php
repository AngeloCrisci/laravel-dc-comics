@extends("layouts.app")

@section("page-title", "Manga Singolo")

@section("main-content")
<h1 class="text-center text-white mb-4">
    Pagina del fumetto {{$item["title"]}}
</h1>
<div class="container">
    <div class="row mb-2">
        <div>
            <img src="{{$item["thumb"]}}" class="pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $item["title"] }}</h1>
            <p class="card-text">Descrizione: {{ $item["description"] }}</p>
            <p class="card-text"><strong> Prezzo: $ {{ $item["price"] }} </strong></p>
            <p class="card-text">Autore: {{ $item["author"] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
