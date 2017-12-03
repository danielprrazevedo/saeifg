<div class="row form-group">
    <label class="col-xs-12 col-sm-3{{ $errors->has('dt_prev_inic') ? ' has-error' : '' }}">
        Data prevista de Início:
        <input name="dt_prev_inic" class="calendario form-control" value="{{$errors->any() ? old('dt_prev_inic') : (!!$contract->dt_prev_inic ? $contract->prev_inic() : '')}}">
        @if ($errors->has('dt_prev_inic'))
            <span class="help-block">
                <strong>{{ $errors->first('dt_prev_inic') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-3{{ $errors->has('dt_prev_fim') ? ' has-error' : '' }}">
        Data prevista de Término:
        <input name="dt_prev_fim" class="calendario form-control" value="{{$errors->any() ? old('dt_prev_fim') : (!!$contract->dt_prev_fim ? $contract->prev_fim() : '')}}">
        @if ($errors->has('dt_prev_fim'))
            <span class="help-block">
                <strong>{{ $errors->first('dt_prev_fim') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-6{{ $errors->has('student_id') ? ' has-error' : '' }}">
        Estagiário:
        <select class="form-control select2" name="student_id">
            <option selected disabled >Selecione um Aluno</option>
            @foreach($students as $student)
                <option value="{{$student->id}}" {{($errors->any() ? old('student_id') : $student->id) == $contract->student_id ? 'selected' : ''}}>{{$student->user->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('student_id'))
            <span class="help-block">
                <strong>{{ $errors->first('student_id') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-5{{ $errors->has('company_id') ? ' has-error' : '' }}">
        Estagiário:
        <select class="form-control select2" name="company_id">
            <option selected disabled >Selecione uma Empresa</option>
            @foreach($companies as $company)
                <option value="{{$company->id}}" {{($errors->any() ? old('company_id') : $company->id) == $contract->company_id ? 'selected' : ''}}>{{$company->fantasy_name}}</option>
            @endforeach
        </select>
        @if ($errors->has('company_id'))
            <span class="help-block">
                <strong>{{ $errors->first('company_id') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-5{{ $errors->has('teacher_id') ? ' has-error' : '' }}">
        Estagiário:
        <select class="form-control select2" name="teacher_id">
            <option selected disabled >Selecione um Orientador</option>
            @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}" {{($errors->any() ? old('teacher_id') : $teacher->id) == $contract->teacher_id ? 'selected' : ''}}>{{$teacher->user->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('teacher_id'))
            <span class="help-block">
                <strong>{{ $errors->first('teacher_id') }}</strong>
            </span>
        @endif
    </label>
    <label class="col-xs-12 col-sm-2{{ $errors->has('carga_horaria') ? ' has-error' : '' }}">
        Carga horária diária:
        <input name="carga_horaria" class="form-control" value="{{$errors->any() ? old('carga_horaria') : $contract->carga_horaria}}">
        @if ($errors->has('carga_horaria'))
            <span class="help-block">
                <strong>{{ $errors->first('carga_horaria') }}</strong>
            </span>
        @endif
    </label>
</div>
<div class="row form-group">
    <label class="col-xs-12 col-sm-12{{ $errors->has('observacao') ? ' has-error' : '' }}">
        Observações:
        <textarea rows="4" name="observacao" class="form-control">{{$errors->any() ? old('observacao') : $contract->observacao}}</textarea>
        @if ($errors->has('observacao'))
            <span class="help-block">
                <strong>{{ $errors->first('observacao') }}</strong>
            </span>
        @endif
    </label>
</div>