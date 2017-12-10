@extends('layout')
@section('styles')
    <style type="text/css">
        .mensagem {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 0 8px 8px 8px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-radius: 8px 0 8px 8px;
            border-color: #2f9e41;
            background-color: #c4edcd;
            text-align: right;
            float: right;
        }

        .mensagem::after {
            content: "";
            clear: both;
            display: table;
        }

        .mensagem img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .mensagem img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach($messages as $message)
                <div class="col-sm-9 mensagem{{ $message->youMessage() ? ' darker' : ''}}">
                    <p>{{ $message->message }}</p>
                    <span class="time-{{ $message->youMessage() ? 'right' : 'left'}}">{{ $message->created_at }}</span>
                </div>
            @endforeach
        </div>
        <form method="post" action="{{ route('message.update', $id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-sm-9 navbar-right text-right">
                    <h3 class="text-left">Nova mensagem</h3>
                    <textarea name="message" class="form-control" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary media">
                        <i class="glyphicon glyphicon-envelope"></i> Enviar
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="text-center">
                <a href="{{ route('message.index') }}" class="btn btn-danger">
                    <i class="glyphicon glyphicon-circle-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
    </div>
@endsection