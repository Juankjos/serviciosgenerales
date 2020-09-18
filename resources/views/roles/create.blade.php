@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-md-6">
                <form action="/roles" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del Rol</label>
                        <input type="text" class="form-control" name="name"
                            placeholder="Introduzca el nombre que tendra el rol">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea class="form-control" name="description"
                            placeholder="Introduzca la descripcion que tendra el rol" rows="3"></textarea>
                    </div>
                    <div class="row">
                        {{ $cate = '' }}
                        @foreach ($permisos as $permiso)
                            <div class="col-xs-6 col-md-12">
                                @if ($cate != $permiso->category)
                                    <div class="form-group">
                                        {{ Form::label('categoria', $cate = $permiso->category) }}
                                    </div>
                                @endif
                                <label>
                                    {{ Form::checkbox('permisos[]', $permiso->id) }}
                                    {{ $permiso->display }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger float-right">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
