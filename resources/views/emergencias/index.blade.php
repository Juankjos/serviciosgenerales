@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{ url('emergencias/create') }}"> <button type="button" class="btn btn-success float-right">Crear nuevo
                reporte </button> </a>

        <h2> Reportes de emergencias ambientales </h2>
        <table class="table table-striped table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ereports as $ereport)
                    <tr>
                        <th scope="row">{{ $ereport->id }}</th>
                        <td>{{ $ereport->date }}</td>

                        <td>
                            <form action="{{ route('emergencias.destroy', $ereport->id) }}" method="POST">
                                <a href="{{ route('emergencias.show', $ereport->id) }}"><button type="button"
                                        class="btn btn-info"><i style="color: white" class="far fa-eye"
                                            alt="Submit"></i></button></a>
                                <a href="{{ route('emergencias.edit', $ereport->id) }}"><button type="button"
                                        class="btn btn-success"><i class="far fa-edit"></i></button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Seguro que desea Eliminar el reporte?')"><i
                                        class="far fa-trash-alt"></i></button></button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
