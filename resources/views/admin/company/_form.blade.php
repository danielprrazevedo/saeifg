<div class="row form-group">
    <label class="col-xs-12 col-sm-8{{ $errors->has('social_reason') ? ' has-error' : '' }}">
        Razão Social:
        <input type="text" class="form-control" name="social_reason" value="{{$errors->any() ? old('social_reason') : $company->social_reason}}">
        @if ($errors->has('social_reason'))
            <span class="help-block">
                <strong>{{ $errors->first('social_reason') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-4{{ $errors->has('cnpj') ? ' has-error' : '' }}">
        CNPJ:
        <input type="text" class="form-control" name="cnpj" value="{{$errors->any() ? old('cnpj') : $company->cnpj}}">
        @if ($errors->has('cnpj'))
            <span class="help-block">
                <strong>{{ $errors->first('cnpj') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-8{{ $errors->has('fantasy_name') ? ' has-error' : '' }}">
        Nome de Fantasia:
        <input type="text" class="form-control" name="fantasy_name" value="{{$errors->any() ? old('fantasy_name') : $company->fantasy_name}}">
        @if ($errors->has('fantasy_name'))
            <span class="help-block">
                <strong>{{ $errors->first('fantasy_name') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-4{{ $errors->has('state_registration') ? ' has-error' : '' }}">
        Insc. Estadual:
        <input type="text" class="form-control" name="state_registration" value="{{$errors->any() ? old('state_registration') : $company->state_registration}}">
        @if ($errors->has('state_registration'))
            <span class="help-block">
                <strong>{{ $errors->first('state_registration') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-4{{ $errors->has('phone') ? ' has-error' : '' }}">
        Telefone:
        <input type="text" class="form-control" name="phone" value="{{$errors->any() ? old('phone') : $company->phone}}">
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-8{{ $errors->has('email') ? ' has-error' : '' }}">
        E-Mail:
        <input type="text" class="form-control" name="email" value="{{$errors->any() ? old('email') : $company->email}}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-7{{ $errors->has('supervisor_name') ? ' has-error' : '' }}">
        Nome do supervisor:
        <input type="text" class="form-control" name="supervisor_name" value="{{$errors->any() ? old('supervisor_name') : $company->supervisor_name}}">
        @if ($errors->has('supervisor_name'))
            <span class="help-block">
                <strong>{{ $errors->first('supervisor_name') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-5{{ $errors->has('area_id') ? ' has-error' : '' }}">
        Area de Atuação:
        <select class="form-control" name="area_id">
            <option disabled selected>Seleciona uma área de atuação</option>
            @foreach($areas as $area)
                <option value="{{$area->id}}" {{($errors->any() ? old('area_id') : $area->id) == $company->area_id ? 'selected' : ''}}>{{$area->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('area_id'))
            <span class="help-block">
                <strong>{{ $errors->first('area_id') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-12{{ $errors->has('address') ? ' has-error' : '' }}">
        Endereço:
        <textarea rows="4" class="form-control" name="address" >{{$errors->any() ? old('address') : $company->address}}</textarea>
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </label>
</div>