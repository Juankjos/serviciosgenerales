@extends('layouts.app')

@section('content')

    <div class="">
        <a href="{{ url('reportes/compresor/create') }}"> <button type="button" class="btn btn-success float-right">Crear
                nuevo </button> </a>
        <h2> Reportes de Compresor </h2>

        <table class="table table-striped table-hover " id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nivel de aceite</th>
                    <th scope="col">Temperatura</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Usuario</th>
                    <th data-card-footer scope="col">Opciones</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($creports as $creport)

                    <tr>
                        <td scope="row">{{ $creport->id }}</td>
                        <td>{{ $creport->date }}</td>
                        <td>{{ $creport->oil_level }}</td>
                        <td>{{ $creport->temperature }}</td>
                        <td>{{ $creport->observations }}</td>
                        <td>{{ $creport->user_report }}</td>

                        <td>
                            <form action="{{ route('compresor.destroy', $creport->id) }}" method="POST">


                                <a href="{{ route('compresor.pdf', $creport->id) }}"><button type="button"
                                        class="btn btn-warning"><i class="fas fa-print"></i></button></a>
                                <a href="{{ route('compresor.show', $creport->id) }}"><button type="button"
                                        class="btn btn-info"><i class="far fa-eye" alt="Submit"
                                            style="color: white"></i></button></a>
                                <a href="{{ route('compresor.edit', $creport->id) }}"><button type="button"
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
