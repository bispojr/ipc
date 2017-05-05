@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1em">
        <ol class="breadcrumb">
            <li>
                <a href="{{ URL::to('/')}}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username')}}">
                    Admin
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username/problem')}}">
                    Problemas
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username/problem/code')}}">
                    Q27
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username/problem/code/edit')}}">
                    Editar
                </a>
            </li>
            <li class="active">
                Erro
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">            
            
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Erro!
                </div>
                <div class="panel-body">
                    Erro na edição do problema!                    
                </div>
                <div class="panel-footer">
                    <b>Possibilidades:</b><br>
                    - Algum campo vazio; <br>
                    - Código em conflito (com outro aluno). <br>
                </div>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ URL::to('/admin/username/student/username/edit')}}">
                    Tentar novamente
                </a>
            </div>            
            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection