<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_maestro" class="form-label">{{ __('Id Maestro') }}</label>
            <input type="text" name="id_maestro" class="form-control @error('id_maestro') is-invalid @enderror" value="{{ old('id_maestro', $maestro?->id_maestro) }}" id="id_maestro" placeholder="Id Maestro">
            {!! $errors->first('id_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $maestro?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_maestro" class="form-label">{{ __('Nombre Maestro') }}</label>
            <input type="text" name="nombre_maestro" class="form-control @error('nombre_maestro') is-invalid @enderror" value="{{ old('nombre_maestro', $maestro?->nombre_maestro) }}" id="nombre_maestro" placeholder="Nombre Maestro">
            {!! $errors->first('nombre_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos_maestro" class="form-label">{{ __('Apellidos Maestro') }}</label>
            <input type="text" name="apellidos_maestro" class="form-control @error('apellidos_maestro') is-invalid @enderror" value="{{ old('apellidos_maestro', $maestro?->apellidos_maestro) }}" id="apellidos_maestro" placeholder="Apellidos Maestro">
            {!! $errors->first('apellidos_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma_maestro" class="form-label">{{ __('Idioma Maestro') }}</label>
            <input type="text" name="idioma_maestro" class="form-control @error('idioma_maestro') is-invalid @enderror" value="{{ old('idioma_maestro', $maestro?->idioma_maestro) }}" id="idioma_maestro" placeholder="Idioma Maestro">
            {!! $errors->first('idioma_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_maestro" class="form-label">{{ __('Estado Maestro') }}</label>
            <input type="text" name="estado_maestro" class="form-control @error('estado_maestro') is-invalid @enderror" value="{{ old('estado_maestro', $maestro?->estado_maestro) }}" id="estado_maestro" placeholder="Estado Maestro">
            {!! $errors->first('estado_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>