@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ url('emergencias') }}">
            @csrf
            <div class="form-group ">
                <label for="date">Fecha</label>
                <input class="form-control" type="date" value="{{ $date }}" name="date" id="date">
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="observations">Observaciones</label>
                <textarea class="form-control" id="observations" name="observations" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">
                {{ __('Crear Reporte') }}
            </button>
        </form>
    </div>
    </div>

@endsection
