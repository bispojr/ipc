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
                <a href="@yield('breadcrumb-url')">
                    @yield("breadcrumb-text")
                </a>
            </li>
            <li class="active">
                Erro
            </li>
        </ol>
        <div class="col-md-2"></div>
        <div class="col-md-5">            
            
            <div class="panel panel-danger">
                <div class="panel-heading">
                    @yield("error-title")
                </div>
                <div class="panel-body">
                    @yield("error-message")
                </div>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href='@yield("error-button-url")'>
                    @yield('error-button-label')
                </a>
            </div>            
            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection