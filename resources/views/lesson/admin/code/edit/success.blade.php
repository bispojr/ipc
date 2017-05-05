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
                    Edição de problema realizada com sucesso!
                </div>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ URL::to('/admin/username/problem')}}">
                    OK
                </a>
            </div>            
            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection