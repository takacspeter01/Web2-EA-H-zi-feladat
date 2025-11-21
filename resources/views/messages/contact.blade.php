@extends('layouts.app')

@section('title', 'Kapcsolat')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Kapcsolat</h1>

        @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Név</label>
                <input type="text" name="name" id="name"
                       class="form-control"
                       value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email"
                       class="form-control"
                       value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Tárgy</label>
                <input type="text" name="subject" id="subject"
                       class="form-control"
                       value="{{ old('subject') }}" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Üzenet</label>
                <textarea name="message" id="message"
                          rows="5" class="form-control"
                          required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="button button-lg radius-10">
                Üzenet elküldése
            </button>
        </form>
    </div>
@endsection
