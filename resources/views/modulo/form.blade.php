<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Id Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror" value="{{ old('id_modulo', $modulo?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_maestro" class="form-label">{{ __('Id Maestro') }}</label>
            <input type="text" name="id_maestro" class="form-control @error('id_maestro') is-invalid @enderror" value="{{ old('id_maestro', $modulo?->id_maestro) }}" id="id_maestro" placeholder="Id Maestro">
            {!! $errors->first('id_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_grupo" class="form-label">{{ __('Id Grupo') }}</label>
            <input type="text" name="id_grupo" class="form-control @error('id_grupo') is-invalid @enderror" value="{{ old('id_grupo', $modulo?->id_grupo) }}" id="id_grupo" placeholder="Id Grupo">
            {!! $errors->first('id_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dia_modulo" class="form-label">{{ __('Dia Modulo') }}</label>
            <input type="text" name="dia_modulo" class="form-control @error('dia_modulo') is-invalid @enderror" value="{{ old('dia_modulo', $modulo?->dia_modulo) }}" id="dia_modulo" placeholder="Dia Modulo">
            {!! $errors->first('dia_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_inicio" class="form-label">{{ __('Hora Inicio') }}</label>
            <input type="text" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror" value="{{ old('hora_inicio', $modulo?->hora_inicio) }}" id="hora_inicio" placeholder="Hora Inicio">
            {!! $errors->first('hora_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_fin" class="form-label">{{ __('Hora Fin') }}</label>
            <input type="text" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror" value="{{ old('hora_fin', $modulo?->hora_fin) }}" id="hora_fin" placeholder="Hora Fin">
            {!! $errors->first('hora_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="materia_modulo" class="form-label">{{ __('Materia Modulo') }}</label>
            <input type="text" name="materia_modulo" class="form-control @error('materia_modulo') is-invalid @enderror" value="{{ old('materia_modulo', $modulo?->materia_modulo) }}" id="materia_modulo" placeholder="Materia Modulo">
            {!! $errors->first('materia_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_modulo" class="form-label">{{ __('Estado Modulo') }}</label>
            <input type="text" name="estado_modulo" class="form-control @error('estado_modulo') is-invalid @enderror" value="{{ old('estado_modulo', $modulo?->estado_modulo) }}" id="estado_modulo" placeholder="Estado Modulo">
            {!! $errors->first('estado_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>