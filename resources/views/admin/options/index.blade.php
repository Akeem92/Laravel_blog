@extends('admin.admin')

@section('title', 'Tous les options')

@section('content')
    <h1>@yield('title')</h1>

    <div class="text-end">
        <a href="{{ route('admin.option.create') }}" class="btn btn-primary"> Ajouter une option </a>
    </div> <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                            <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.option.destroy', $option) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $options->links() }}
@endsection
