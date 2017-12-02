@extends('layout')
@section('content')
    <form method="post" action="{{route('company.update', $company->id)}}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="container">
            @include('admin.company._form')
            <div class="col-sm-12 text-center">
                <a href="{{route('company.index')}}" class="btn btn-danger">
                    <i class="glyphicon glyphicon-circle-arrow-left"></i>
                    Voltar
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-check"></i>
                    Alterar
                </button>
            </div>
        </div>
    </form>
@endsection