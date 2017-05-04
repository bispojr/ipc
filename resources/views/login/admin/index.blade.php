@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 1em">
        <ol class="breadcrumb">
            <li>
                <a href="{{ URL::to('/')}}">
                    Home
                </a>
            </li>
            <li class="active">
                Login (Admin)
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">
            
            <h1>Login (Admin)</h1>
            
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ URL::to("/admin/username") }}">Entre</a>
                    <a class="btn btn-danger" href="{{ URL::to("/login/student/error") }}">Erro</a>
                </div>
            </form>
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection