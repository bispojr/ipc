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
                Dados do Aluno
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Dados do Aluno</h1> 
            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="font-size: 2em;">
                                Fulano de Tal da Silva <br>
                            </div>
                            <b>Matrícula:</b> 98989898 <br>                            
                            <b>Email:</b> fulano@gmail.com
                        </div>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-success" href="{{ URL::to("/admin/username/student") }}">OK</a>
                        <a class="btn btn-info"
                           href="{{ URL::to("/admin/username/student/username/edit") }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger"
                           href="{{ URL::to("/admin/username/student/username/delete") }}">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </div>
                    
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection