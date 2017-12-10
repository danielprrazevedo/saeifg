<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <title>SAE - Sistema Acadêmico de Estágio</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<header class="page-header">
    <img src="{{asset('img/LogoEst.png')}}" class="logo-sys">
    <a href="http://ifg.edu.br/" target="_blank">
        <img src="{{asset('img/LogoIfg.png')}}" class="logo-ifg">
    </a>
</header>
<main>
    <div id="app">
        @yield('content')
    </div>
</main>

<footer class="page-footer text-center">
    <span class="valign-center">&copy; IFG - Uruaçu</span>
    @if(Auth::check())
        <a href="{{route('logout')}}" class="btn btn-primary pull-right" style="margin: 0 5px 0 0">
            <span class="glyphicon glyphicon-log-out"></span>
            Sair
        </a>
    @endif
</footer>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
@yield('scripts')
</body>
</html>