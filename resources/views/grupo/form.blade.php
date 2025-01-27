<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_grupo" class="form-label">{{ __('Id Grupo') }}</label>
            <input type="text" name="id_grupo" class="form-control @error('id_grupo') is-invalid @enderror" value="{{ old('id_grupo', $grupo?->id_grupo) }}" id="id_grupo" placeholder="Id Grupo">
            {!! $errors->first('id_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_grupo" class="form-label">{{ __('Nombre Grupo') }}</label>
            <input type="text" name="nombre_grupo" class="form-control @error('nombre_grupo') is-invalid @enderror" value="{{ old('nombre_grupo', $grupo?->nombre_grupo) }}" id="nombre_grupo" placeholder="Nombre Grupo">
            {!! $errors->first('nombre_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="carrera_grupo" class="form-label">{{ __('Carrera Grupo') }}</label>
            <input type="text" name="carrera_grupo" class="form-control @error('carrera_grupo') is-invalid @enderror" value="{{ old('carrera_grupo', $grupo?->carrera_grupo) }}" id="carrera_grupo" placeholder="Carrera Grupo">
            {!! $errors->first('carrera_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_alumnos_grupo" class="form-label">{{ __('Num Alumnos Grupo') }}</label>
            <input type="text" name="num_alumnos_grupo" class="form-control @error('num_alumnos_grupo') is-invalid @enderror" value="{{ old('num_alumnos_grupo', $grupo?->num_alumnos_grupo) }}" id="num_alumnos_grupo" placeholder="Num Alumnos Grupo">
            {!! $errors->first('num_alumnos_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_grupo" class="form-label">{{ __('Estado Grupo') }}</label>
            <input type="text" name="estado_grupo" class="form-control @error('estado_grupo') is-invalid @enderror" value="{{ old('estado_grupo', $grupo?->estado_grupo) }}" id="estado_grupo" placeholder="Estado Grupo">
            {!! $errors->first('estado_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>