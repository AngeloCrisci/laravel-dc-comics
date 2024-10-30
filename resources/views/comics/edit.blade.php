@extends("layouts.app")

@section("page-title", "Editing " . $item->title)

@section("main-content")

<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("comics.update" , $item->id) }}">
            @method("PUT")
            @csrf
            <h1 class="mb-3">
                Edita {{ $item->title }} :
            </h1>
            <div class="mb-3">
                <label for="manga-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="manga-title" name="title" value="{{$item->title}}">
            </div>
            <div class="mb-3">
                <label for="manga-description" class="form-label">Descrizione:</label>
                <input type="text" class="form-control" id="manga-description" name="description" value="{{$item->description}}">
            </div>
            <div class="mb-3">
                <label for="manga-price" class="form-label">Prezzo:</label>
                <input type="number" class="form-control" id="manga-price" name="price" value="{{$item->price}}">
            </div>
            <div class="mb-3">
                <label for="manga-thumb" class="form-label">Ulr immagine:</label>
                <input type="text" class="form-control" id="manga-thumb" name="thumb" value="{{$item->thumb}}">
            </div>
            <div class="mb-3">
                <label for="manga-author" class="form-label">Autore:</label>
                <input type="text" class="form-control" id="manga-author" name="author" value="{{$item->author}}">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Edita {{$item->title}}
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>

@endsection