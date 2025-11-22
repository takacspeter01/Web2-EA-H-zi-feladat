@extends('layouts.app')

@section('title', 'Create Trail')

@section('content')
<div class="container mt-4">
    <h1>Tanösvény létrehozása</h1>

    <form action="{{ route('trails.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Név</label>
            <input type="text" name="nev" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hossz (km)</label>
            <input type="number" step="0.1" name="hossz" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Állomások</label>
            <input type="number" name="allomas" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Idő (óra)</label>
            <input type="number" step="0.1" name="ido" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Vezetés?</label>
            <select name="vezetes" class="form-control">
                <option value="0">Nincs</option>
                <option value="1">Van</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Település</label>
            <select name="telepulesid" class="form-control" required>
                <option value="">Válasszon egy települést</option>
                @foreach($settlements as $settlement)
                    <option value="{{ $settlement->id }}">{{ $settlement->nev }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Létrehoz</button>
        <a href="{{ route('trails.index') }}" class="btn btn-secondary">Vissza</a>
    </form>
</div>
@endsection