<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_modificacion" class="form-label">{{ __('Id Modificacion') }}</label>
            <input type="text" name="id_modificacion" class="form-control @error('id_modificacion') is-invalid @enderror" value="{{ old('id_modificacion', $modificacione?->id_modificacion) }}" id="id_modificacion" placeholder="Id Modificacion">
            {!! $errors->first('id_modificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Id Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror" value="{{ old('id_modulo', $modificacione?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_maestro" class="form-label">{{ __('Id Maestro') }}</label>
            <input type="text" name="id_maestro" class="form-control @error('id_maestro') is-invalid @enderror" value="{{ old('id_maestro', $modificacione?->id_maestro) }}" id="id_maestro" placeholder="Id Maestro">
            {!! $errors->first('id_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_grupo" class="form-label">{{ __('Id Grupo') }}</label>
            <input type="text" name="id_grupo" class="form-control @error('id_grupo') is-invalid @enderror" value="{{ old('id_grupo', $modificacione?->id_grupo) }}" id="id_grupo" placeholder="Id Grupo">
            {!! $errors->first('id_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_modificacion" class="form-label">{{ __('Estado Modificacion') }}</label>
            <input type="text" name="estado_modificacion" class="form-control @error('estado_modificacion') is-invalid @enderror" value="{{ old('estado_modificacion', $modificacione?->estado_modificacion) }}" id="estado_modificacion" placeholder="Estado Modificacion">
            {!! $errors->first('estado_modificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>