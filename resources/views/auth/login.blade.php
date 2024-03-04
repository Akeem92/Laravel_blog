@extends('base')

@section('title', 'Se connecter')

@section('content')
    <div class="mt-4 container">
        <h1>@yield('title')</h1>

        @include('shared.flash')

        <form class="vstack gap-3" action="{{ route('login') }}" method="post">
            @csrf
            @method('post')

            @include('shared.input', [
                'type' => 'email',
                'class' => 'col',
                'name' => 'email',
                'label' => 'Email',
            ])

            @include('shared.input', [
                'type' => 'password',
                'class' => 'col',
                'name' => 'password',
                'label' => 'Mot de passe',
            ])

            <button class="btn btn-primary">Se connecter</button>
        </form>
    </div>
@endsection
