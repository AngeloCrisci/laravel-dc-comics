@extends("layouts.app")

@section("page-title", "Create Manga")

@section("main-content")

<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("comics.store") }}">
            @csrf
            <h1 class="mb-3">
                Aggiungi un nuovo manga:
            </h1>
            <div class="mb-3">
                <label for="manga-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="manga-title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="manga-description" class="form-label">Descrizione:</label>
                <input type="text" class="form-control" id="manga-description" name="description" value="{{ old('description') }}" >
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="manga-price" class="form-label">Prezzo:</label>
                <input type="number" class="form-control" id="manga-price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="manga-thumb" class="form-label">Ulr immagine:</label>
                <input type="text" class="form-control" id="manga-thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="manga-author" class="form-label">Autore:</label>
                <input type="text" class="form-control" id="manga-author" name="author" value="{{ old('author') }}">
                @error('author')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Aggiungi
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
