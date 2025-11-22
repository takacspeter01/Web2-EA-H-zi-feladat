@extends('layouts.app')

@section('title', 'Edit Trail')

@section('content')
<div class="container mt-4">
    <h1>Edit Trail</h1>

    <form action="{{ route('trails.update', $trail->azon) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="nev" class="form-control" value="{{ $trail->nev }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Length (km)</label>
            <input type="number" step="0.1" name="hossz" class="form-control" value="{{ $trail->hossz }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stations</label>
            <input type="number" name="allomas" class="form-control" value="{{ $trail->allomas }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Time (hours)</label>
            <input type="number" step="0.1" name="ido" class="form-control" value="{{ $trail->ido }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Guided?</label>
            <select name="vezetes" class="form-control">
                <option value="0" {{ $trail->vezetes == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ $trail->vezetes == 1 ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Settlement</label>
            <select name="telepulesid" class="form-control" required>
                @foreach($settlements as $settlement)
                    <option value="{{ $settlement->id }}"
                        {{ $trail->telepulesid == $settlement->id ? 'selected' : '' }}>
                        {{ $settlement->nev }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Save Changes</button>
        <a href="{{ route('trails.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection