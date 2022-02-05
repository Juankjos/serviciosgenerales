@extends('layouts.app')

@section('content')
<div class="row  border-bottom bg-light dashboard-header " style="padding:0; margin-left: -7px !important; margin-bottom: 10px">
    <div class="col-lg-6" style="margin-left:15px; padding:0;">
        <h2> Crear Ticket </h2>
    </div>
</div>

    <!----Start---->
    <div class="card" style="padding: 5px">
        <div class="card-body" style="padding: 5px !important">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card-title">Filtrar por fecha</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-10">
                    <div class="card-text">

                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                    <!---INPUT DATE INI---->    
                                    <div class="input-group-prepend">
                                            <div class="input-group-text">Inicio</div>
                                        </div>
                                      <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Fin</div>
                                        </div>
                                        <input type="date" class="form-control">
                                       <!---INPUT DATE END---->
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-sync"></i>Actualizar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    
                    <a href="{{ url('tickets/create') }}">
                        <button type="button" class="btn btn-success float-right">Crear nuevo</button>
                    </a>
                                        
                </div>
            </div>

            <table class="table table-hover" style="border: solid 1px black">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center" style="width: 120px">Fecha de Creación</th>
                        <th scope="col" style="width: 120px">Fecha de Expiración</th>
                        <th scope="col" style="width: 150px">Asignado a</th>
                        <th scope="col">Reporte</th>
                        <th scope="col">Usuario</th>
                        <th scope="col" style="width: 110px">Código de Usuario</th>
                        <th scope="col" class="text-center" style="width: 210px" data-card-footer scope="col-xs-2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!---End--->
@endsection