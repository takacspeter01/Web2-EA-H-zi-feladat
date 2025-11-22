@extends('layouts.app')

@section('title', 'Adatbázis – Tanösvények')

@section('content')
    <div class="container" style="padding-top:140px;">
        <h1 class="mb-4">Tanösvények (Adatbázis menü)</h1>

        <table class="table table-striped bg-white">
            <thead>
                <tr>
                    <th>Azon</th>
                    <th>Név</th>
                    <th>Hossz (km)</th>
                    <th>Állomások</th>
                    <th>Idő (óra)</th>
                    <th>Vezetés</th>
                    <th>Település</th>
                    <th>Nemzeti park</th>
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
                        <td>
                            @if($trail->vezetes)
                                Van
                            @else
                                Nincs
                            @endif
                        </td>
                        <td>{{ $trail->settlement->nev ?? '-' }}</td>
                        <td>{{ $trail->settlement->nationalPark->nev ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
