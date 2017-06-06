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
            <li class="active">
                Frequência
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Lista de Frequências</h1> 
            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="text-right">
                        <a class="btn btn-success"
                           href="{{ URL::to("/admin/username/lesson/create") }}">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Criar 
                        </a>
                    </div>
                    <table class="table table-condensed" style="margin-top: 0.5em;">
                        <tr>
                            <th>Turma</th>
                            <th>Ações</th>
                        </tr>
                        <tr>
                            <td>Teoria de Grafos</td>
                            <td>
                                <a class="btn btn-primary btn-xs" 
                                   href="{{ URL::to("/admin/username/course/tg/section/2017-1/frequency") }}">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-info btn-xs"
                                   href="{{ URL::to("/admin/username/lesson/code/edit") }}">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-danger btn-xs"
                                   href="{{ URL::to("/admin/username/lesson/code/delete") }}">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Teoria da Computação</td>
                            <td>
                                <a class="btn btn-primary btn-xs" 
                                   href="{{ URL::to("/admin/username/lesson/code") }}">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-info btn-xs"
                                   href="{{ URL::to("/admin/username/lesson/code/edit") }}">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-danger btn-xs"
                                   href="{{ URL::to("/admin/username/lesson/code/delete") }}">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection