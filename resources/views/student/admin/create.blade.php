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
                Criar
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            
            <h1>Criar Aluno</h1>
            
            <form>
                <div class="form-group">
                    <label for="enrollment">Matrícula:</label>
                    <input type="number" class="form-control" id="enrollment" placeholder="Matrícula">
                </div>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="text-right">
                    <a class="btn btn-success" href="{{ URL::to("/admin/username/student/create/success") }}">Criar</a>
                    <a class="btn btn-danger" href="{{ URL::to("/admin/username/student/create/error") }}">Erro</a>
                </div>
            </form>
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection