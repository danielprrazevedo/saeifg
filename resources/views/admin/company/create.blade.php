@extends('layout')
@section('content')
    <form method="post" action="{{route('company.store')}}">
        {{ csrf_field() }}
        <div class="container">
            @include('admin.company._form')
            <div class="col-sm-12 text-center">
                <a href="{{route('company.index')}}" class="btn btn-danger">
                    <i class="glyphicon glyphicon-circle-arrow-left"></i>
                    Voltar
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-check"></i>
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
@endsection