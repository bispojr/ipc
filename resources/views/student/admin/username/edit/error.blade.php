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
                <a href="{{ URL::to('/admin/username/student')}}">
                    Alunos
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username/student/username')}}">
                    Fulano
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/admin/username/student/username/edit')}}">
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
                    Erro na edição do aluno!                    
                </div>
                <div class="panel-footer">
                    <b>Possibilidades:</b><br>
                    - Algum campo vazio; <br>
                    - Matrícula em conflito (com outro aluno); <br>
                    - Email em conflito (com outro aluno). <br>
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