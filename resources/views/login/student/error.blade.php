@extends('layouts.error')

@section('breadcrumb-url', URL::to('/login/student'))
@section('breadcrumb-text', 'Login (Aluno)')

@section('error-title', 'Erro de login (aluno)')
@section('error-message', 'Não foi possível realizar o login.')

@section('error-button-url', URL::to('/login/student'))
@section('error-button-label', 'Tentar novamente!')