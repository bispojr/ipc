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
                Problemas
            </li>
        </ol>
        <div class="col-md-7">
            
            <h1>Base de Problemas</h1> 
            
            
            <div class="row" style="margin-top: 1em;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="text-right">
                        <a class="btn btn-success"
                           href="{{ URL::to("/admin/username/problem/create") }}">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Criar 
                        </a>
                    </div>
                    <table class="table table-condensed" style="margin-top: 0.5em;">
                        <tr>
                            <th>ID</th>
                            <th>Enunciado</th>
                            <th>Ações</th>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>
                                <a class="btn btn-primary btn-xs" 
                                   href="{{ URL::to("/admin/username/problem/code") }}">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-info btn-xs"
                                   href="{{ URL::to("/admin/username/problem/code/edit") }}">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-danger btn-xs"
                                   href="{{ URL::to("/admin/username/problem/code/delete") }}">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                        <tr>
                            <td>Q27</td>
                            <td>Quem descobriu o Brasil?</td>
                            <td>-----</td>
                        </tr>
                    </table>
                </div>
            </div>            
        </div>
        <div class="col-md-5"></div>
    </div>
@endsection