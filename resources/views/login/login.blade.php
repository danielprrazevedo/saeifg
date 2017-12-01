@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('registry') ? ' has-error' : '' }}">
                                <label for="registry" class="col-md-4 control-label">Matricula</label>

                                <div class="col-md-6">
                                    <input id="registry" type="" class="form-control" name="registry" value="{{ old('registry') }}" required autofocus>

                                    @if ($errors->has('registry'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('registry') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        <span class="glyphicon glyphicon-log-in"></span>
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection