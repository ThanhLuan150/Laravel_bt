
<!-- resources/views/api-data.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($data['Countries'] as $country)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">{{ $country['Country'] }}</div>
                        <div class="card-body">
                            <p class="card-text"><strong>Total Confirmed:</strong> {{ $country['TotalConfirmed'] }}</p>
                            <p class="card-text"><strong>Total Deaths:</strong> {{ $country['TotalDeaths'] }}</p>
                            <p class="card-text"><strong>Total Recovered:</strong> {{ $country['TotalRecovered'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
