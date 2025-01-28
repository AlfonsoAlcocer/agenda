<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_horariooficial" class="form-label">{{ __('Numero del horario') }}</label>
            <input type="text" name="id_horariooficial" class="form-control @error('id_horariooficial') is-invalid @enderror" value="{{ old('id_horariooficial', $horariosOficiale?->id_horariooficial) }}" id="id_horariooficial" placeholder="Id Horariooficial">
            {!! $errors->first('id_horariooficial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cuatrimestre_horario_oficial" class="form-label">{{ __('Cuatrimestre del Horario') }}</label>
            <input type="text" name="cuatrimestre_horario_oficial" class="form-control @error('cuatrimestre_horario_oficial') is-invalid @enderror" value="{{ old('cuatrimestre_horario_oficial', $horariosOficiale?->cuatrimestre_horario_oficial) }}" id="cuatrimestre_horario_oficial" placeholder="Cuatrimestre Horario Oficial">
            {!! $errors->first('cuatrimestre_horario_oficial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Numero del Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror" value="{{ old('id_modulo', $horariosOficiale?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion_modulo" class="form-label">{{ __('Descripcion del Modulo') }}</label>
            <input type="text" name="descripcion_modulo" class="form-control @error('descripcion_modulo') is-invalid @enderror" value="{{ old('descripcion_modulo', $horariosOficiale?->descripcion_modulo) }}" id="descripcion_modulo" placeholder="Descripcion Modulo">
            {!! $errors->first('descripcion_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
    <label for="estado_horario" class="form-label">{{ __('Estado') }}</label>
    <select name="estado_horario" id="estado_horario" class="form-control @error('estado_horario') is-invalid @enderror">
        <option value="1" {{ old('estado_horario', $horariosOficiale?->estado_horario) == 1 ? 'selected' : '' }}>
            Activo
        </option>
        <option value="0" {{ old('estado_horario', $horariosOficiale?->estado_horario) == 0 ? 'selected' : '' }}>
            Inactivo
        </option>
    </select>
    {!! $errors->first('estado_horario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>