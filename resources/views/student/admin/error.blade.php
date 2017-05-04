@extends('layouts.error')

@section('breadcrumb-url', URL::to('/login/admin'))
@section('breadcrumb-text', 'Login (Admin)')

@section('error-title', 'Erro de Criação do Aluno (Admin)')
@section('error-message', 'Não foi possível criar o aluno.')

@section('error-button-url', URL::to('/admin/username/student/create'))
@section('error-button-label', 'Tentar novamente!')