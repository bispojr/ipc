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
                <a href="{{ URL::to('/admin/username/lesson')}}">
                    Aulas
                </a>
            </li>
            <li class="active">
                TG-01
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Dados da Aula</h1>            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="font-size: 2em; margin-bottom: 0.7em;">
                                <b>Código:</b> TG-01
                            </div>
                            <a class="btn btn-default" href="{{ URL::to("/admin/username/problem/code") }}">Q12</a> 
                            <a class="btn btn-default" href="{{ URL::to("/admin/username/problem/code") }}">Q15</a> 
                            <a class="btn btn-default" href="{{ URL::to("/admin/username/problem/code") }}">Q20</a> 
                            <a class="btn btn-default" href="{{ URL::to("/admin/username/problem/code") }}">Q23</a>
                        </div>
                    </div>
                    
                    <div class="text-right">
                        <a class="btn btn-success" href="{{ URL::to("/admin/username/lesson") }}">OK</a>
                        <a class="btn btn-info"
                           href="{{ URL::to("/admin/username/lesson/code/edit") }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger"
                           href="{{ URL::to("/admin/username/lesson/code/delete") }}">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </div>
                    
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection