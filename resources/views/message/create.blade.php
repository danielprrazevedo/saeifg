@extends('layout')
@section('content')
    <div class="container" >
        <form method="post" action="{{ route('message.store') }}">
            {{ csrf_field() }}
            <div class="row flex-center form-group">
                <label class="col-xs-12 col-sm-6{{ $errors->has('receiver_id') ? ' has-error' : '' }}">
                    Destinatário:
                    <select class="form-control select2" name="receiver_id">
                        <option disabled selected>Seleciona o destinatário</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" {{old('receiver_id') == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('receiver_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('receiver_id') }}</strong>
                    </span>
                    @endif
                </label>
            </div>
            <div class="row form-group">
                <label class="col-xs-12 col-sm-12{{ $errors->has('message') ? ' has-error' : '' }}">
                    Mensagem:
                    <textarea name="message" cols="30" rows="3" maxlength="1000" class="form-control">{{old('message')}}</textarea>
                    @if ($errors->has('message'))
                    <span class="help-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                    @endif
                </label>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 text-center">
                    <a class="btn btn-danger" href="{{route('message.index')}}">
                        <i class="glyphicon glyphicon-circle-arrow-left"></i>
                        Voltar
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="glyphicon glyphicon-check"></i>
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection