@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Creación Tickets</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('tickets') }}"></form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label for="example-date-input">Fecha de generación</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label for="example-date-input">Fecha de expiración</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <div class="form-group col-md-9">
                                    <label>Asignar a:</label>
                                    <input type="text" class="form-control" placeholder="Nombre completo del empleado">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label for="TicketReporte">Reporte</label>
                                    <textarea class="form-control" rows="3" 
                                    placeholder="Describa su reporte"></textarea>
                                </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Evidencia</label>
                                    <input type="file">
                                </div>
                            </div>

                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Crear Reporte') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection