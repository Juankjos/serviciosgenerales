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
                    <div class="card-header">{{ __('Reporte de Agua') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('reportes/agua') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group ">
                                        <label for="date">Fecha de generación</label>
                                        <input class="form-control" type="date" name="" value="{{ $date }}" name="date"
                                            id="date">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="start_hour">Hora de inicio de extracción</label>
                                        <input class="form-control" type="time" value="13:45:00" id="start_hour"
                                            name="start_hour">
                                    </div>

                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="final_hour">Hora de fin de extracción</label>
                                        <input class="form-control" type="time" value="13:45:00" id="final_hour"
                                            name="final_hour">
                                    </div>

                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-group">

                                        <label for="Lectura_inicial">Lectura inicial</label>
                                        <input type="number" class="form-control" id="initial_read" name="initial_read"
                                            placeholder="Medida de lectura inicial">

                                    </div>

                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="cloration">Cloración</label>
                                        <input type="number" class="form-control" id="cloration" name="cloration"
                                            placeholder="Cantidad por litro">
                                    </div>

                                </div>

                                <div class="form-group col-md-4">
                                    <div class="form-group">

                                        <label for="Lectura_f">Lectura Final</label>
                                        <input type="number" class="form-control" id="final_read" name="final_read"
                                            placeholder="Medida de lectura final">

                                    </div>

                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="consumption">Consumo Metros cubicos</label>
                                        <input class="form-control" type="number" value="42" id="consumption"
                                            name="consumption">
                                    </div>


                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="consumption_t">Consumo Total del mes</label>
                                        <input class="form-control" type="number" value="42" id="consumption_t"
                                            name="consumption_t">
                                    </div>


                                </div>

                            </div>

                            <div class="form-group">
                                <label for="Observaciones">Observaciones</label>
                                <textarea class="form-control" id="observations" name="observations" rows="3"></textarea>
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
