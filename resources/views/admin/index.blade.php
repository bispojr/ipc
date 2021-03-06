@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1em">
        <ol class="breadcrumb">
            <li>
                <a href="{{ URL::to('/')}}">
                    Home
                </a>
            </li>
            <li class="active">
                Admin
            </li>
        </ol>
        <div class="col-md-8">
            
            <h1>Painel (Admin)</h1>
            <div class="row" style="margin-top: 1em;">
                <a href="{{ URL::to('/admin/username/student')}}" 
                   class="btn btn-primary active" style="font-size: 2.5em; padding: 1em;"
                >
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Alunos
                </a>
                <a href="{{ URL::to('/admin/username/problem')}}"
                    class="btn btn-primary active" style="font-size: 2.5em; padding: 1em;">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Problemas
                </a>
                <a href="{{ URL::to('/admin/username/lesson')}}"
                    class="btn btn-primary active" style="font-size: 2.5em; padding: 1em;">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Aulas
                </a>
            </div>            
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection