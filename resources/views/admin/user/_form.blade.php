<div class="container">
    <div class="row form-group">
        <label class="col-xs-12 col-sm-9{{ $errors->has('name') ? ' has-error' : '' }}">
            Nome:
            <input class="form-control" name="name" type="text" value="{{$errors->any() ? old('name') : $user->name}}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </label>
        <label class="col-xs-12 col-sm-3{{ $errors->has('registry') ? ' has-error' : '' }}">
            Matricula:
            <input class="form-control" name="registry" type="text" value="{{$errors->any() ? old('registry') : $user->registry}}" required>
            @if ($errors->has('registry'))
                <span class="help-block">
                    <strong>{{ $errors->first('registry') }}</strong>
                </span>
            @endif
        </label>
    </div>
    <div class="row form-group">
        <label class="col-xs-12 col-sm-8{{ $errors->has('email') ? ' has-error' : '' }}">
            E-Mail:
            <input class="form-control" name="email" type="email" value="{{$errors->any() ? old('email') : $user->email}}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </label>
        <label class="col-xs-12 col-sm-4{{ $errors->has('phone') ? ' has-error' : '' }}">
            Telefone:
            <input class="form-control phone" name="phone" type="text" value="{{$errors->any() ? old('phone') : $user->phone}}" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </label>
    </div>
    <div class="row form-group">
        <label class="col-xs-12 col-sm-4{{ $errors->has('user_type') ? ' has-error' : '' }}">
            Tipo:
            <select class="form-control" name="user_type">
                <option selected disabled >Selecione um tipo de usuário</option>
                @foreach($user_types as $key => $user_type)
                    <option value="{{$key}}" {{($errors->any() ? old('user_type') : $user->user_type) == $key ? 'selected' : ((!!$user->user_type) ? 'disabled' : '')}}>{{$user_type}}</option>
                @endforeach
            </select>
            @if ($errors->has('user_type'))
                <span class="help-block">
                    <strong>{{ $errors->first('user_type') }}</strong>
                </span>
            @endif
        </label>
    </div>
    <div class="row form-group professor">
        <label class="col-xs-12 col-sm-4{{ $errors->has('area_id') ? ' has-error' : '' }}">
            Tipo:
            <select class="form-control" name="area_id">
                <option selected disabled >Selecione uma área</option>
                @foreach($areas as $area)
                    <option value="{{$area->id}}" {{($errors->any() ? old('area_id') : $area->id) == $user->teacher()->area_id ? 'selected' : ''}}>{{$area->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('area_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('area_id') }}</strong>
                </span>
            @endif
        </label>
    </div>
    <div class="row form-group aluno">
        <label class="col-xs-12 col-sm-3{{ $errors->has('cpf') ? ' has-error' : '' }}">
            CPF:
            <input name="cpf" class="cpf form-control" value="{{$errors->any() ? old('cpf') : $user->student()->cpf}}">
            @if ($errors->has('cpf'))
                <span class="help-block">
                    <strong>{{ $errors->first('cpf') }}</strong>
                </span>
            @endif
        </label>
        <label class="col-xs-12 col-sm-3{{ $errors->has('rg') ? ' has-error' : '' }}">
            RG:
            <input name="rg" class="rg form-control" value="{{$errors->any() ? old('rg') : $user->student()->rg}}">
            @if ($errors->has('rg'))
                <span class="help-block">
                    <strong>{{ $errors->first('rg') }}</strong>
                </span>
            @endif
        </label>
        <label class="col-xs-12 col-sm-3{{ $errors->has('dt_nasc') ? ' has-error' : '' }}">
            Data de Nascimento:
            <input name="dt_nasc" class="calendario form-control" value="{{$errors->any() ? old('dt_nasc') : (!!$user->student()->dt_nasc ? date("d/m/Y", strtotime($user->student()->dt_nasc)) : '')}}">
            @if ($errors->has('dt_nasc'))
                <span class="help-block">
                    <strong>{{ $errors->first('dt_nasc') }}</strong>
                </span>
            @endif
        </label>
        <label class="col-xs-12 col-sm-3{{ $errors->has('course_id') ? ' has-error' : '' }}">
            Curso:
            <select class="form-control" name="course_id">
                <option selected disabled >Selecione uma área</option>
                @foreach($courses as $course)
                    <option value="{{$course->id}}" {{($errors->any() ? old('course_id') : $course->id) == $user->student()->course_id ? 'selected' : ''}}>{{$course->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('course_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('course_id') }}</strong>
                </span>
            @endif
        </label>
    </div>

    <div class="row form-group aluno">
        <label class="col-xs-12 col-sm-12{{ $errors->has('address') ? ' has-error' : '' }}">
            Endereço:
            <textarea name="address" rows="3" class="form-control">{{$errors->any() ? old('address') : $user->student()->address}}</textarea>
        </label>
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>