@extends("layouts.app")

@section("page-title", "Manga")

@section("main-content")
<div class="container">
    <a href="{{ route("comics.create") }}" class="btn btn-primary m-3 d-flex justify-content-center align-content-center">
        Crea un nuovo Manga
    </a>
    <div class="row mb-2">
    @forelse ($manga as $index => $item )
        <div style="width: 18rem;">
            <img src="{{$item->thumb}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
            <h1 class="card-text">{{ $item->id}} Titolo:  {{ $item->title }}</h1>
            <p class="card-text">Descrizione: {{ $item->description }}</p>
            <p class="card-text">Autore: {{ $item->author }}</p>
            <p class="card-text"><strong> Prezzo: $ {{ $item->price }} </strong></p>
             <a class="btn btn-secondary mb-2" href="{{route("comics.show" , $item->id) }}">
                Vai al fumetto
            </a>
            <a class="btn btn-secondary mb-2" href="{{route("comics.edit" , $item->id) }}">
                Edita il fumetto
            </a>
            <form action="{{route("comics.delete" , $item->id) }}"
                 method="post">
            @csrf
            @method("DELETE")
            <input type="submit" value="Elimina" class="btn btn-danger mb-2">

            </form>
            </div>
        </div>
    @empty
        <div>
            <h1>
                No Manga Are aviable
            </h1>
        </div>
    @endforelse
    </div>
</div>
@endsection
