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
            <li class="active">
                <a href="{{ URL::to('/admin/username/student/username')}}">
                    Fulano
                </a>
            </li>
            <li class="active">
                Remover
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Dados do Aluno</h1>            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Tem certeza que deseja remover este aluno?
                        </div>
                        <div class="panel-body">
                            <div style="font-size: 2em;">
                                Fulano de Tal da Silva <br>
                            </div>
                            <b>Matrícula:</b> 98989898 <br>                             
                            <b>Email:</b> fulano@gmail.com
                        </div>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-danger"
                           href="{{ URL::to("/admin/username/student/username/delete/success") }}">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover
                        </a>
                        <a class="btn btn-default" href="{{ URL::to("/admin/username/student/username") }}">Cancelar</a>
                    </div>
                    
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection