@extends('layout')
@section('styles')
    <style>
        .aluno, .professor {
            display: none;
        }
    </style>
@endsection
@section('content')
    <form method="post" id="form" action="{{route("user.update", $user->id)}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        @include('admin.user._form')
        <div class="col-sm-12 text-center">
            <a href="{{route('user.index')}}" class="btn btn-danger">
                <i class="glyphicon glyphicon-circle-arrow-left"></i>
                Voltar
            </a>
            <button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-check"></i>
                Cadastrar
            </button>
        </div>

    </form>
@endsection
@section('scripts')
    @include('admin.user._scripts')
@endsection