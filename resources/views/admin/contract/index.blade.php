@extends('layout')
@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-12 text-center">
            <a href="{{route('contract.create')}}" class="btn btn-success">
                <i class="glyphicon glyphicon-plus-sign"></i>
                Novo Contrato
            </a>
        </div>
        <div class="col-xs-12 col-sm-12">
            <table class="display table table-striped table-bordered" id="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Aluno</th>
                    <th>Empresa</th>
                    <th>Orientador</th>
                    <th>Dt. Ingresso</th>
                    <th>Area</th>
                    <th class="text-center"> - </th>
                </tr>
                </thead>
                <tbody>
                @foreach($contracts as $contract)
                    <tr>
                        <td>{{$contract->id}}</td>
                        <td>{{$contract->student->user->name}}</td>
                        <td>{{$contract->company->fantasy_name}}</td>
                        <td>{{$contract->teacher->user->name}}</td>
                        <td>{{$contract->prev_inic()}}</td>
                        <td>{{$contract->company->area->name}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" data-toggle="tooltip" title="Editar" href="{{route("contract.edit", $contract->id)}}">
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