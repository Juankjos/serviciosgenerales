@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Emergencia ambiental
            </div>
            <div class="card-body">
                <h5 class=" d-flex justify-content-center">Descripción</h5>
                <p class="card-text">{{ $ereport->description }}</p>
                <h5 class=" d-flex justify-content-center">Observaciones</h5>
                <p class="card-text">{{ $ereport->observations }}</p>
            </div>
            <div class="card-footer text-muted">
                Reporte de: {{ $ereport->date }}
            </div>
        </div>
    </div>

@endsection
