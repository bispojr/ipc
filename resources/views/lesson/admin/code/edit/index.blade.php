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
            <li class="active">
                Editar
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-7">
            
            <h1>Editar Problema</h1>
            
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="code" class="col-sm-2 control-label">Código:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="code" value="Q27">
                    </div>
                </div>
                <div class="form-group">
                    <label for="statement" class="col-sm-2 control-label">Enunciado:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="statement" value="Quem descobriu o Brasil?">
                    </div>
                </div>
                <div class="form-group">
                    <label for="option_a" class="col-sm-2 control-label">Opção (a):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="option_a" value="Cabral">
                    </div>
                </div>
                <div class="form-group">
                    <label for="option_b" class="col-sm-2 control-label">Opção (b):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="option_b" value="Cabrel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="option_c" class="col-sm-2 control-label">Opção (c):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="option_c" value="Cabril">
                    </div>
                </div>
                <div class="form-group">
                    <label for="option_d" class="col-sm-2 control-label">Opção (d):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="option_d" value="Cabrol">
                    </div>
                </div>
                <div class="form-group">
                    <label for="option_e" class="col-sm-2 control-label">Opção (e):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="option_e" value="Cabrul">
                    </div>
                </div>
                <div class="form-group">
                    <label for="correct_option" class="col-sm-2 control-label">Resposta:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="correct_option" id="correct_option_a" value="a" checked> a
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="correct_option" id="correct_option_b" value="b"> b
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="correct_option" id="correct_option_c" value="c"> c
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="correct_option" id="correct_option_c" value="c"> d
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="correct_option" id="correct_option_c" value="c"> e
                        </label>
                    </div>
                </div>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ URL::to("/admin/username/problem/code/edit/success") }}">Editar</a>
                    <a class="btn btn-danger" href="{{ URL::to("/admin/username/problem/code/edit/error") }}">Erro</a>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection