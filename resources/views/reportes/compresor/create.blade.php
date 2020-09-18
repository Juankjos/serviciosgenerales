@extends('layouts.app')

@section('content')
    @if (count($errors) > 0)

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="text-center">
                            <strong>¡Parece que algunos campos estan vacios o no tienen los datos correctos!</strong>
                        </div>
                        <ul>
                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach
                        </ul>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Reporte de Compresor') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('reportes/compresor') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group ">
                                        <label for="example-date-input">Fecha de generación</label>
                                        <input class="form-control" type="date" value="{{ $date }}" name="date"
                                            id="example-date-input">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-group">

                                        <label for="nivel">Nivel de aceite</label>
                                        <input type="number" class="form-control" id="nivel" name="level"
                                            placeholder="Medida de nivel de aceite">

                                    </div>

                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">

                                        <label for="Temperatura">Temperatura °C</label>
                                        <input type="number" class="form-control" id="Temperatura" name="temperature"
                                            placeholder="Ingrese medida de temperatura">

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="Observaciones">Observaciones</label>
                                <textarea class="form-control" id="Observaciones" name="observations" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Crear Reporte') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
