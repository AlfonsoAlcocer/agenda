<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_notificacion" class="form-label">{{ __('Id Notificacion') }}</label>
            <input type="text" name="id_notificacion"
                class="form-control @error('id_notificacion') is-invalid @enderror"
                value="{{ old('id_notificacion', $notificacione?->id_notificacion) }}" id="id_notificacion"
                placeholder="Id Notificacion">
            {!! $errors->first('id_notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="emisor_notificacion" class="form-label">{{ __('Emisor Notificación') }}</label>
            <select name="emisor_notificacion" class="form-control @error('emisor_notificacion') is-invalid @enderror"
                id="emisor_notificacion">
                <option value="">{{ __('Seleccione un emisor') }}</option>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id_maestro }}" {{ old('emisor_notificacion', $notificacione?->emisor_notificacion) == $maestro->id_maestro ? 'selected' : '' }}>
                        {{ $maestro->nombre_maestro }} {{ $maestro->apellidos_maestro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('emisor_notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="receptor_notificacion" class="form-label">{{ __('Receptor Notificación') }}</label>
            <select name="receptor_notificacion"
                class="form-control @error('receptor_notificacion') is-invalid @enderror" id="receptor_notificacion">
                <option value="">{{ __('Seleccione un receptor') }}</option>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id_maestro }}" {{ old('receptor_notificacion', $notificacione?->receptor_notificacion) == $maestro->id_maestro ? 'selected' : '' }}>
                        {{ $maestro->nombre_maestro }} {{ $maestro->apellidos_maestro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('receptor_notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="descripcion_notificacion" class="form-label">{{ __('Descripcion Notificacion') }}</label>
            <input type="text" name="descripcion_notificacion"
                class="form-control @error('descripcion_notificacion') is-invalid @enderror"
                value="{{ old('descripcion_notificacion', $notificacione?->descripcion_notificacion) }}"
                id="descripcion_notificacion" placeholder="Descripcion Notificacion">
            {!! $errors->first('descripcion_notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_notificacion" class="form-label">{{ __('Estado Notificacion') }}</label>
            <input type="text" name="estado_notificacion"
                class="form-control @error('estado_notificacion') is-invalid @enderror"
                value="{{ old('estado_notificacion', $notificacione?->estado_notificacion) }}" id="estado_notificacion"
                placeholder="Estado Notificacion">
            {!! $errors->first('estado_notificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>