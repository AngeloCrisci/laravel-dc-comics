@extends("layouts.app")

@section("page-title", "Manga")

@section("main-content")
<div class="container">
    <div class="row mb-2">
    @foreach ($manga as $index => $item )
        <div class="card" style="width: 18rem;">
            <img src="{{$item["thumb"]}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">Titolo: {{ $item["title"] }}</h1>
            <p class="card-text">Descrizione: {{ $item["description"] }}</p>
            <p class="card-text">Autore: {{ $item["author"] }}</p>
            <p class="card-text"><strong> Prezzo: {{ $item["price"] }} </strong></p>
            {{-- <a class="btn btn-secondary" href="{{route("manga_show" , $index ) }}">
                Vai al fumetto
            </a> --}}
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
