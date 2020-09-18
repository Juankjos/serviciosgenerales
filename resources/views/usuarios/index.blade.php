@extends('layouts.app')

@section('search')
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar por nombre o correo"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
@endsection

@section('content')
    <div class="container">
        @can('usuarios.create')
            <a href="usuarios/create"> <button type="button" style="margin-left: 10px;" class="btn btn-success float-right">
                    Agregar usuario </button> </a>
        @endcan
        <a href="roles"> <button type="button" class="btn btn-success float-right"> Listado de Roles </button> </a>
        <h2> Lista de usuarios </h2>
        <h6>
            @if ($search)
                <div class="alert alert-primary" role="alert">
                    Resultados de tu busqueda {{ $search }}
                </div>
            @endif
        </h6>
        <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <tr class="thead-dark">
                    <th scope="col">ID</th>
                    <th data-card-title scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th data-card-footer scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                @can('usuarios.show')
                                    <a href="{{ route('usuarios.show', $user->id) }}"><button type="button"
                                            class="btn btn-secondary">Ver</button></a>
                                @endcan
                                <a href="{{ route('usuarios.edit', $user->id) }}"><button type="button"
                                        class="btn btn-primary">Editar</button></a>
                                @csrf
                                @if ($user->id != '1')
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('¿Seguro que desea Eliminar el reporte?')"><i
                                            class="far fa-trash-alt"></i></button></button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
