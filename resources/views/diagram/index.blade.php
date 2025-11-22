@extends('layouts.app')

@section('title', 'Diagram')

@section('content')

 <div class="container" style="padding-top:140px;">
    <h2 class="mb-4">Tanösvények száma településenként</h2>
    <canvas id="trailChart" height="120"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('trailChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: {!! json_encode($telepulesek->pluck('nev')) !!},
        datasets: [{
            label: 'Tanösvények száma',
            data: {!! json_encode($telepulesek->pluck('trails_count')) !!},
            backgroundColor: 'rgba(54, 162, 235, 0.7)'
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endsection