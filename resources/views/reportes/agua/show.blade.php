@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-6 mx-auto">

            <div class="card text-center">
                <div class="card-header">
                    <div class="row">
                        <h5 class="col-sm-6 text-left">Codigo usuario: {{ $wreport->user_report }}</h5>
                        <div class="col-sm-6 text-right">
                            <a href="{{ url('reportes/agua') }}" class="btn btn-secondary">Volver</a>
                            <a href="{{ route('agua.edit', $wreport->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Lectura inicial: </p>
                            <p>{{ $wreport->initial_read }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Lectura final: </p>
                            <p>{{ $wreport->final_read }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Cloración: </p>
                            <p>{{ $wreport->cloration }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Consumo: </p>
                            <p>{{ $wreport->consumption }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Consumo total: </p>
                            <p>{{ $wreport->consumption_total }}</p>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <p class="font-weight-bold text-left">Observaciones: </p>
                        <p class="card-text  text-left">{{ $wreport->Observations }}</p>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <p class="text-left">Reporte de: {{ $wreport->date }} </p>
                </div>
            </div>

        </div>
    </div>

@endsection
