@extends('layout')
@section('content')
    <div class="container page-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 text-center">
                <h2 class="page-title">Menu Principal</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="col-xs-4 col-sm-4 text-center">
                    <a class="menu">
                        <span class="glyphicon glyphicon-list"></span><br>
                        Contratos
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4 text-center">
                    <a class="menu" href="{{route('user.index')}}">
                        <span class="glyphicon glyphicon-user"></span><br>
                        Usuários
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4 text-center">
                    <a class="menu" href="">
                        <span class="glyphicon glyphicon glyphicon-book"></span><br>
                        Empresas
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="col-xs-4 col-sm-4 text-center">
                    <a class="menu">
                        <span class="glyphicon glyphicon-inbox"></span><br>
                        Recados
                    </a>
                </div>
                <div class="col-xs-4 col-sm-4 text-center">
                    <a class="menu">
                        <span class="glyphicon glyphicon-alert"></span><br>
                        Atrasados
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection