@extends('layout')
@section('content')

    <div class="container">
        <div class="col-xs-12 col-sm-12 text-center">
            <a href="{{route('message.create')}}" class="btn btn-success">
                <i class="glyphicon glyphicon-plus-sign"></i>
                Nova Mensagem
            </a>
        </div>
        <table id="table" class="table table-responsive table-striped table-hover display">
            <thead>
            <tr>
                <th>ID</th>
                <th>Pessoa</th>
                <th>Ult. Menssagem</th>
                <th>Data</th>
                <th>Lida</th>
                <th>Vis.</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->person()->name}}</td>
                <td>{{$message->lastMessage()->message}}</td>
                <td>{{$message->lastMessage()->created_at}}</td>
                <td>{{$message->lastMessage()->visualized}}</td>
                <td>
                    <a href="{{route('message.show', $message->id)}}" class="btn btn-success" data-toggle="tooltip" title="Clique para visualizar conversa">
                        <i class="glyphincon glyphicon-envelope"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a class="btn btn-danger" href="{{route('menu')}}">
                <i class="glyphicon glyphicon-circle-arrow-left"></i>
                Voltar
            </a>
        </div>
    </div>
@endsection