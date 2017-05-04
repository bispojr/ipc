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
                Criar
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            
            <h1>Criar Problema</h1>
            
            <form>
                <div class="form-group">
                    <label for="code">Código:</label>
                    <input type="text" class="form-control" id="code" placeholder="Código">
                </div>
                <div class="form-group">
                    <label for="statement">Enunciado:</label>
                    <input type="text" class="form-control" id="statement" placeholder="Enunciado">
                </div>
                <div class="form-group">
                    <label for="option_a">Opção (a):</label>
                    <input type="text" class="form-control" id="option_a" placeholder="Opção (a)">
                </div>
                <div class="form-group">
                    <label for="option_b">Opção (b):</label>
                    <input type="text" class="form-control" id="option_b" placeholder="Opção (b)">
                </div>
                <div class="form-group">
                    <label for="option_c">Opção (c):</label>
                    <input type="text" class="form-control" id="option_c" placeholder="Opção (c)">
                </div>
                <div class="form-group">
                    <label for="option_d">Opção (d):</label>
                    <input type="text" class="form-control" id="option_d" placeholder="Opção (d)">
                </div>
                <div class="form-group">
                    <label for="option_e">Opção (e):</label>
                    <input type="text" class="form-control" id="option_e" placeholder="Opção (e)">
                </div>
                <div class="text-right">
                    <a class="btn btn-success" href="{{ URL::to("/admin/username/problem/create/success") }}">Criar</a>
                    <a class="btn btn-danger" href="{{ URL::to("/admin/username/problem/create/error") }}">Erro</a>
                </div>
            </form>
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection