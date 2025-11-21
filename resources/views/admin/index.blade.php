@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Admin felület</h1>
        <p>Csak admin szerepkörű felhasználók férnek hozzá.</p>
        <p>Bejelentkezve: {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>
    </div>
@endsection
