@extends('layout')
@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-12 text-center">
            <a href="{{route('company.create')}}" class="btn btn-success">
                <i class="glyphicon glyphicon-plus-sign"></i>
                Nova Empresa
            </a>
        </div>
        <div class="col-xs-12 col-sm-12">
            <table class="display table table-striped table-bordered" id="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Razão Social</th>
                    <th>E-Mail</th>
                    <th>Telefone</th>
                    <th>Area</th>
                    <th class="text-center"> - </th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->fantasy_name}}</td>
                        <td>{{$company->social_reason}}</td>
                        <td>{{$company->phone}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->area->name}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" data-toggle="tooltip" title="Editar" href="{{route("company.edit", $company->id)}}">
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