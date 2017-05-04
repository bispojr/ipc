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
            <li class="active">
                Q27
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Dados do Problema</h1>            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="font-size: 2em;">
                                <b>[Q27]</b> Quem descobriu o Brasil?
                            </div>
                            <b style="background-color: green; color: white; padding: 0.2em;">(a)</b> Cabral <br>
                            <b>(b)</b> Cabrel <br>
                            <b>(c)</b> Cabril <br>
                            <b>(d)</b> Cabrol <br>
                            <b>(e)</b> Cabrul <br>
                        </div>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-success" href="{{ URL::to("/admin/username/problem") }}">OK</a>
                        <a class="btn btn-info"
                           href="{{ URL::to("/admin/username/problem/code/edit") }}">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger"
                           href="{{ URL::to("/admin/username/problem/code/delete") }}">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </div>
                    
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection