<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_historial" class="form-label">{{ __('Id Historial') }}</label>
            <input type="text" name="id_historial" class="form-control @error('id_historial') is-invalid @enderror" value="{{ old('id_historial', $historialHorario?->id_historial) }}" id="id_historial" placeholder="Id Historial">
            {!! $errors->first('id_historial', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cuatrimestre_horario" class="form-label">{{ __('Cuatrimestre Horario') }}</label>
            <input type="text" name="cuatrimestre_horario" class="form-control @error('cuatrimestre_horario') is-invalid @enderror" value="{{ old('cuatrimestre_horario', $historialHorario?->cuatrimestre_horario) }}" id="cuatrimestre_horario" placeholder="Cuatrimestre Horario">
            {!! $errors->first('cuatrimestre_horario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Id Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror" value="{{ old('id_modulo', $historialHorario?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion_modulo" class="form-label">{{ __('Descripcion Modulo') }}</label>
            <input type="text" name="descripcion_modulo" class="form-control @error('descripcion_modulo') is-invalid @enderror" value="{{ old('descripcion_modulo', $historialHorario?->descripcion_modulo) }}" id="descripcion_modulo" placeholder="Descripcion Modulo">
            {!! $errors->first('descripcion_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>