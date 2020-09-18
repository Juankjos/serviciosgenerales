@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="roles/create"> <button type="button" class="btn btn-success float-right"> Agregar rol </button> </a>
        <h2> Lista de roles del sistema </h2>
        <h6>
            @if ($query)
                <div class="alert alert-primary" role="alert">
                    Resultados de tu busqueda {{ $query }}
                </div>
            @endif
        </h6>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr>
                        <th scope="row">{{ $rol->id }}</th>
                        <td>{{ $rol->name }}</td>
                        <td>{{ $rol->description }}</td>
                        <td>
                            <form action="{{ route('roles.destroy', $rol->id) }}" method="POST">
                                {{-- @can('roles.show') --}}
                                <a href="{{ route('roles.show', $rol->id) }}"><button type="button"
                                        class="btn btn-secondary">Ver</button></a>
                                {{-- @endcan
                                @can('roles.edit') --}}
                                <a href="{{ route('roles.edit', $rol->id) }}"><button type="button"
                                        class="btn btn-primary">Editar</button></a>
                                {{-- @endcan --}}
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Seguro que desea Eliminar el rol?')"><i
                                        class="far fa-trash-alt"></i></button></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>
@endsection
