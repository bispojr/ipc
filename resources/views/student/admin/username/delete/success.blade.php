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
                <a href="{{ URL::to('/admin/username/student/username/delete')}}">
                    Remover
                </a>
            </li>
            <li class="active">
                Sucesso
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">            
            
            <div class="panel panel-success">
                <div class="panel-heading">
                    Sucesso
                </div>
                <div class="panel-body">
                    Remoção de aluno realizada com sucesso!
                </div>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ URL::to('/admin/username/student')}}">
                    OK
                </a>
            </div>            
            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection