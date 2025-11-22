@extends('layouts.app')

@section('title', 'Edit Trail')

@section('content')
<div class="container" style="padding-top:140px;">
    <h1>Tanösvény módosítás</h1>

    <form action="{{ route('trails.update', $trail->azon) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Név</label>
            <input type="text" name="nev" class="form-control" value="{{ $trail->nev }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hossz (km)</label>
            <input type="number" step="0.1" name="hossz" class="form-control" value="{{ $trail->hossz }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Állomások</label>
            <input type="number" name="allomas" class="form-control" value="{{ $trail->allomas }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Idő (óra)</label>
            <input type="number" step="0.1" name="ido" class="form-control" value="{{ $trail->ido }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Vezetés?</label>
            <select name="vezetes" class="form-control">
                <option value="0" {{ $trail->vezetes == 0 ? 'selected' : '' }}>Nincs</option>
                <option value="1" {{ $trail->vezetes == 1 ? 'selected' : '' }}>Van</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Település</label>
            <select name="telepulesid" class="form-control" required>
                @foreach($settlements as $settlement)
                    <option value="{{ $settlement->id }}"
                        {{ $trail->telepulesid == $settlement->id ? 'selected' : '' }}>
                        {{ $settlement->nev }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Mentés</button>
        <a href="{{ route('trails.index') }}" class="btn btn-secondary">Vissza</a>
    </form>
</div>
@endsection