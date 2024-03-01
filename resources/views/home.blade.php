@extends('base')

@section('title', 'Acceuil')

@section('content')
    <div class="bg-ligth p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence Immobilière</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi totam ea qui laborum accusantium quos
                laboriosam suscipit, distinctio sequi sint minima libero officia cumque debitis, ex corporis deserunt
                numquam sed!</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
