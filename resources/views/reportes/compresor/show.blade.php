@extends('layouts.app')

@section('content')


<div class="row">

    <div class="col-sm-6 mx-auto">

        <div class="card text-center">
            <div class="card-header">
                <div class="row">
                    <h5 class="col-sm-6 text-left">Codigo Usuario: {{$creport->user_report}}</h5>
                    <div class="col-sm-6 text-right">
                        <a href="{{url('reportes/compresor')}}" class="btn btn-secondary">Volver</a>
                        <a href="{{route('compresor.edit', $creport->id)}}" class="btn btn-primary">Editar</a>
                    </div>

                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="font-weight-bold">Nivel de aceite: </p>
                        <p>{{$creport->oil_level}}</p></div>
                    <div class="col-sm-6">
                        <p class="font-weight-bold">Temperatura: </p>
                        <p>{{$creport->temperature}}</p></div>

                </div>


                <p class="font-weight-bold text-left">Observaciones: </p>
              <p class="card-text  text-left">{{$creport->observations}}</p>

            </div>
            <div class="card-footer text-muted">
            <p class="text-left">Reporte de: {{$creport->date}}</p>
            <p class="text-left">Nombre: {{$ureport->name}}</p>
            <p class="text-left">ID: {{$creport->id}}</p>
            </div>
          </div>

    </div>
  </div>



@endsection
