@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container row justify-content-md-center ">
            <div class="col-sm-3" align="center">
                <img src="http://placehold.it/200x200" alt="" class="img-rounded img-responsive mx-auto d-block" />
            </div>
            <div class="col-sm">
                <h1 class="display-4">{{ $user->name }} {{ $user->lastname }}</h1>
                <p class="lead">Codigo Universitario: {{ $user->code }}</p>
                <p class="lead">Area:</p>
                <p class="lead">{{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection
