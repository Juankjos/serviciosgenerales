@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        {{ dd($rol) }}
        <div class="container">
            <h1 class="display-4">{{ $rol[0]->name }}</h1>
            <p class="lead">{{ $rol[0]->description }}</p>
            @foreach ($rol[1]->permissions as $permiso)
                <div>
                    <label>
                        {{ $permiso->display }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>

@endsection
