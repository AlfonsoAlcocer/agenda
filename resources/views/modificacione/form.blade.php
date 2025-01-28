<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_modificacion" class="form-label">{{ __('numero de modificacion') }}</label>
            <input type="text" name="id_modificacion"
                class="form-control @error('id_modificacion') is-invalid @enderror"
                value="{{ old('id_modificacion', $modificacione?->id_modificacion) }}" id="id_modificacion"
                placeholder="Id Modificacion">
            {!! $errors->first('id_modificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('modulo modificado') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror"
                value="{{ old('id_modulo', $modificacione?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_maestro" class="form-label">{{ __('Maestro') }}</label>
            <select name="id_maestro" class="form-control @error('id_maestro') is-invalid @enderror" id="id_maestro">
                <option value="">{{ __('Seleccione un maestro') }}</option>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id_maestro }}" {{ old('id_maestro', $modificacione?->id_maestro) == $maestro->id_maestro ? 'selected' : '' }}>
                        {{ $maestro->nombre_maestro }} {{ $maestro->apellidos_maestro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_grupo" class="form-label">{{ __('Grupo') }}</label>
            <select name="id_grupo" class="form-control @error('id_grupo') is-invalid @enderror" id="id_grupo">
                <option value="">{{ __('Seleccione un grupo') }}</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id_grupo }}" {{ old('id_grupo', $modificacione?->id_grupo) == $grupo->id_grupo ? 'selected' : '' }}>
                        {{ $grupo->nombre_grupo }} - {{ $grupo->carrera_grupo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_modificacion" class="form-label">{{ __('Estado') }}</label>
            <select name="estado_modificacion" class="form-control @error('estado_modificacion') is-invalid @enderror"
                id="estado_modificacion">
                <option value="1" {{ old('estado_modificacion', $modificacione?->estado_modificacion) == 1 ? 'selected' : '' }}>
                    Activo
                </option>
                <option value="0" {{ old('estado_modificacion', $modificacione?->estado_modificacion) == 0 ? 'selected' : '' }}>
                    Inactivo
                </option>
            </select>
            {!! $errors->first('estado_modificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>