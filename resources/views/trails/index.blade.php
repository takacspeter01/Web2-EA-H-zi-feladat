@extends('layouts.app')

@section('title', 'Tanösvények (CRUD)')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tanösvények (CRUD)</h1>

    <a href="{{ route('trails.create') }}" class="btn btn-primary mb-3">Új ösvény hozzáadása</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azon</th>
                <th>Név</th>
                <th>Hossz (km)</th>
                <th>Állomások</th>
                <th>Idő (óra)</th>
                <th>Vezetés</th>
                <th>Település</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trails as $trail)
                <tr>
                    <td>{{ $trail->azon }}</td>
                    <td>{{ $trail->nev }}</td>
                    <td>{{ $trail->hossz }}</td>
                    <td>{{ $trail->allomas }}</td>
                    <td>{{ $trail->ido }}</td>
                    <td>{{ $trail->vezetes ? 'Van' : 'Nincs' }}</td>
                    <td>{{ $trail->settlement->nev ?? '—' }}</td>
                    <td>
                        <a href="{{ route('trails.edit', $trail->azon) }}" class="btn btn-sm btn-warning">Módosít</a>

                        <form action="{{ route('trails.destroy', $trail->azon) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this trail?')" class="btn btn-sm btn-danger">
                                Törlés
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection