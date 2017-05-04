@extends('layouts.error')

@section('breadcrumb-url', URL::to('/login/admin'))
@section('breadcrumb-text', 'Login (Admin)')

@section('error-title', 'Erro de login (Admin)')
@section('error-message', 'Não foi possível realizar o login.')

@section('error-button-url', URL::to('/login/admin'))
@section('error-button-label', 'Tentar novamente!')