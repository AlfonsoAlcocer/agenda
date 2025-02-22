<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_solicitud" class="form-label">{{ __('Id Solicitud') }}</label>
            <input type="text" name="id_solicitud" class="form-control @error('id_solicitud') is-invalid @enderror"
                value="{{ old('id_solicitud', $solicitude?->id_solicitud) }}" id="id_solicitud"
                placeholder="Id Solicitud">
            {!! $errors->first('id_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2">
            <label for="emisor_solicitudes" class="form-label">{{ __('Emisor Solicitudes') }}</label>
            <select name="emisor_solicitudes" id="emisor_solicitudes"
                class="form-control @error('emisor_solicitudes') is-invalid @enderror">
                <option value="" selected disabled>Seleccione un maestro</option>
                @foreach($maestros as $maestro)
                    <option value="{{ $maestro->id_maestro }}" {{ old('emisor_solicitudes') == $maestro->id_maestro ? 'selected' : '' }}>
                        {{ $maestro->nombre_maestro }} {{ $maestro->apellidos_maestro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('emisor_solicitudes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

        </div>
    </div>

    <div class="form-group mb-2 mb20">
        <label for="id_modulo" class="form-label">{{ __('Numero Modulo') }}</label>
        <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror"
            value="{{ old('id_modulo', $solicitude?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
        {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>



    <div class="form-group mb-2 mb20">
        <label for="estado_solicitud" class="form-label">{{ __('Estado Solicitud') }}</label>
        <select name="estado_solicitud" class="form-control @error('estado_solicitud') is-invalid @enderror"
            id="estado_solicitud">
            <option value="" disabled {{ old('estado_solicitud', $solicitude?->estado_solicitud) === null ? 'selected' : '' }}>Seleccione un estado</option>
            <option value="Pendiente" {{ old('estado_solicitud', $solicitude?->estado_solicitud) === 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
            <option value="Aprobada" {{ old('estado_solicitud', $solicitude?->estado_solicitud) === 'Aprobada' ? 'selected' : '' }}>Aprobada</option>
            <option value="Rechazada" {{ old('estado_solicitud', $solicitude?->estado_solicitud) === 'Rechazada' ? 'selected' : '' }}>Rechazada</option>
        </select>
        {!! $errors->first('estado_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="form-group mb-2 mb20">
        <label for="descripcion_solicitud" class="form-label">{{ __('Descripcion Solicitud') }}</label>
        <input type="text" name="descripcion_solicitud"
            class="form-control @error('descripcion_solicitud') is-invalid @enderror"
            value="{{ old('descripcion_solicitud', $solicitude?->descripcion_solicitud) }}" id="descripcion_solicitud"
            placeholder="Descripcion Solicitud">
        {!! $errors->first('descripcion_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

</div>
<div class="d-flex justify-content-between">
    <a class="btn btn-outline-primary" href="{{ URL::previous() }}">Volver</a>
    <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
</div>
</div>