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
                Editar
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            
            <h1>Editar Aluno</h1>
            
            <form>
                <div class="form-group">
                    <label for="enrollment">Matrícula:</label>
                    <input type="number" class="form-control" id="enrollment" value="98989898">
                </div>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" value="Fulano de Tal da Silva">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" class="form-control" id="email" value="fulano@gmail.com">
                </div>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ URL::to("/admin/username/student/username/edit/success") }}">
                        Editar
                    </a>
                    <a class="btn btn-danger" href="{{ URL::to("/admin/username/student/username/edit/error") }}">Erro</a>
                </div>
            </form>
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection