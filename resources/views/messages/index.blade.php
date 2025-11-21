@php use Illuminate\Support\Str; @endphp

@extends('layouts.app')

@section('title', 'Üzenetek')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Beérkezett üzenetek</h1>

        @if($messages->isEmpty())
            <p>Még nem érkezett üzenet.</p>
        @else
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Név</th>
                        <th>E-mail</th>
                        <th>Tárgy</th>
                        <th>Üzenet</th>
                        <th>Dátum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                        <tr>
                            <td>{{ $msg->id }}</td>
                            <td>{{ $msg->name }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->subject }}</td>
                            <td>{{ Str::limit($msg->message, 80) }}</td>
                            <td>{{ $msg->created_at->format('Y.m.d H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
