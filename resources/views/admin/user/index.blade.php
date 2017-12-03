@extends('layout')
@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-12 text-center">
            <a href="{{route('user.create')}}" class="btn btn-success">
                <i class="glyphicon glyphicon-plus-sign"></i>
                Novo Usuário
            </a>
        </div>
        <div class="col-xs-12 col-sm-12">
            <table class="display table table-striped table-bordered" id="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Tipo</th>
                    <th class="text-center"> - </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->type()}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" data-toggle="tooltip" title="Editar" href="{{route("user.edit", $user->id)}}">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('menu')}}" class="btn btn-danger">
            <i class="glyphicon glyphicon-arrow-left"></i>
            Voltar
        </a>
    </div>
@endsection