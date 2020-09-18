@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <form action="/usuarios" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="code">Código</label>
                        <input type="text" class="form-control" name="code" placeholder="Introduzca el código de usuario">
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Escribe el nombre">
                    </div>
                    <div class="form-group">
                        <label for="lname">Apellido(s)</label>
                        <input type="text" class="form-control" name="lname" placeholder="Introduzca apellido(s)">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" placeholder="Escribe el correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Introduzca la contraseña">
                    </div>
                    <div class="form-group">
                        {{-- {{ dd($roles) }} --}}
                        <label for="Asignación de rol">Asignación de rol</label>
                        <select class="form-control" id="rol" name='rol' placeholder="Asignación de Rol">
                            @foreach ($roles as $rol)
                                <option>{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger float-right">Cancelar</button>
                </form>

            </div>
        </div>
    </div>
@endsection
