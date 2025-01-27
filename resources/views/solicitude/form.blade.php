<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_solicitud" class="form-label">{{ __('Id Solicitud') }}</label>
            <input type="text" name="id_solicitud" class="form-control @error('id_solicitud') is-invalid @enderror" value="{{ old('id_solicitud', $solicitude?->id_solicitud) }}" id="id_solicitud" placeholder="Id Solicitud">
            {!! $errors->first('id_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="emisor_solicitudes" class="form-label">{{ __('Emisor Solicitudes') }}</label>
            <input type="text" name="emisor_solicitudes" class="form-control @error('emisor_solicitudes') is-invalid @enderror" value="{{ old('emisor_solicitudes', $solicitude?->emisor_solicitudes) }}" id="emisor_solicitudes" placeholder="Emisor Solicitudes">
            {!! $errors->first('emisor_solicitudes', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Id Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror" value="{{ old('id_modulo', $solicitude?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_solicitud" class="form-label">{{ __('Estado Solicitud') }}</label>
            <input type="text" name="estado_solicitud" class="form-control @error('estado_solicitud') is-invalid @enderror" value="{{ old('estado_solicitud', $solicitude?->estado_solicitud) }}" id="estado_solicitud" placeholder="Estado Solicitud">
            {!! $errors->first('estado_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion_solicitud" class="form-label">{{ __('Descripcion Solicitud') }}</label>
            <input type="text" name="descripcion_solicitud" class="form-control @error('descripcion_solicitud') is-invalid @enderror" value="{{ old('descripcion_solicitud', $solicitude?->descripcion_solicitud) }}" id="descripcion_solicitud" placeholder="Descripcion Solicitud">
            {!! $errors->first('descripcion_solicitud', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>