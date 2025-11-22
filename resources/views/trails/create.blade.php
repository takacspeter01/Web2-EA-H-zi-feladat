@extends('layouts.app')

@section('title', 'Create Trail')

@section('content')
<div class="container mt-4">
    <h1>Add New Trail</h1>

    <form action="{{ route('trails.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="nev" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Length (km)</label>
            <input type="number" step="0.1" name="hossz" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stations</label>
            <input type="number" name="allomas" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Time (hours)</label>
            <input type="number" step="0.1" name="ido" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Guided?</label>
            <select name="vezetes" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Settlement</label>
            <select name="telepulesid" class="form-control" required>
                <option value="">Choose a Settlement</option>
                @foreach($settlements as $settlement)
                    <option value="{{ $settlement->id }}">{{ $settlement->nev }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Create</button>
        <a href="{{ route('trails.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection