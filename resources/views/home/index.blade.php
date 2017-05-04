@extends('layouts.app')

@section('content')
    <div class="starter-template">
        <h1>IpC Online</h1>
        <p class="lead">
            Realize a Instrução pelos Colegas (IpC) com a gente!    
        </p>
        <p>
            Entre como...
        </p>   
        <a class="btn btn-default" href="{{ URL::to('/login/student') }}">Aluno</a>
        <a class="btn btn-default" href="{{ URL::to('/login/admin') }}">Professor</a>
    </div>
@endsection