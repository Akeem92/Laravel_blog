@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" name="surface" value="{{ $input['surface'] ?? '' }}" placeholder="Surface minimum"
                class="form-control">
            <input type="number" name="rooms" value="{{ $input['rooms'] ?? '' }}" placeholder="Nombre de pièces min"
                class="form-control">
            <input type="number" name="price" value="{{ $input['price'] ?? '' }}" placeholder="Buget max"
                class="form-control">
            <input type="text" name="title" value="{{ $input['title'] ?? '' }}" placeholder="Mot clef"
                class="form-control">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col alert alert-danger">
                    Aucun bien ne correspond à votre recherche
                </div>
            @endforelse
        </div>
    </div>

    <div class="container my-4">
        {{ $properties->links() }}
    </div>
@endsection
