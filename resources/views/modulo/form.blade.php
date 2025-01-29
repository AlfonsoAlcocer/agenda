<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_modulo" class="form-label">{{ __('Numero Modulo') }}</label>
            <input type="text" name="id_modulo" class="form-control @error('id_modulo') is-invalid @enderror"
                value="{{ old('id_modulo', $modulo?->id_modulo) }}" id="id_modulo" placeholder="Id Modulo">
            {!! $errors->first('id_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_maestro" class="form-label">{{ __('Maestro') }}</label>
            <select name="id_maestro" class="form-control @error('id_maestro') is-invalid @enderror" id="id_maestro">
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id_maestro }}" {{ old('id_maestro', $modulo?->id_maestro ?? 1) == $maestro->id_maestro ? 'selected' : '' }}>
                        {{ $maestro->nombre_maestro }} {{ $maestro->apellidos_maestro }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_maestro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_grupo" class="form-label">{{ __('Grupo') }}</label>
            <select name="id_grupo" class="form-control @error('id_grupo') is-invalid @enderror" id="id_grupo">
                @foreach($grupos as $grupo)
                    <option value="{{ $grupo->id_grupo }}" {{ old('id_grupo', $modulo?->id_grupo ?? $grupos->first()?->id_grupo) == $grupo->id_grupo ? 'selected' : '' }}>
                        {{ $grupo->nombre_grupo }} - {{ $grupo->carrera_grupo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_grupo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="dia_modulo" class="form-label">{{ __('Dia') }}</label>
            <select name="dia_modulo" class="form-control @error('dia_modulo') is-invalid @enderror" id="dia_modulo">
                <option value="Lunes" {{ old('dia_modulo', $modulo?->dia_modulo) == 'Lunes' ? 'selected' : '' }}>Lunes
                </option>
                <option value="Martes" {{ old('dia_modulo', $modulo?->dia_modulo) == 'Martes' ? 'selected' : '' }}>Martes
                </option>
                <option value="Miércoles" {{ old('dia_modulo', $modulo?->dia_modulo) == 'Miércoles' ? 'selected' : '' }}>
                    Miércoles</option>
                <option value="Jueves" {{ old('dia_modulo', $modulo?->dia_modulo) == 'Jueves' ? 'selected' : '' }}>Jueves
                </option>
                <option value="Viernes" {{ old('dia_modulo', $modulo?->dia_modulo) == 'Viernes' ? 'selected' : '' }}>
                    Viernes</option>
            </select>
            {!! $errors->first('dia_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="hora_inicio" class="form-label">{{ __('Hora Inicio') }}</label>
            <input type="time" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror"
                value="{{ old('hora_inicio', $modulo?->hora_inicio) }}" id="hora_inicio" placeholder="Hora Inicio">
            {!! $errors->first('hora_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="hora_fin" class="form-label">{{ __('Hora Fin') }}</label>
            <input type="time" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror"
                value="{{ old('hora_fin', $modulo?->hora_fin) }}" id="hora_fin" placeholder="Hora Fin">
            {!! $errors->first('hora_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="materia_modulo" class="form-label">{{ __('Materia') }}</label>
            <select name="materia_modulo" class="form-control @error('materia_modulo') is-invalid @enderror"
                id="materia_modulo">
                <option value="Inglés 1" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 1' ? 'selected' : '' }}>Inglés 1</option>
                <option value="Inglés 2" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 2' ? 'selected' : '' }}>Inglés 2</option>
                <option value="Inglés 3" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 3' ? 'selected' : '' }}>Inglés 3</option>
                <option value="Inglés 4" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 4' ? 'selected' : '' }}>Inglés 4</option>
                <option value="Inglés 5" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 5' ? 'selected' : '' }}>Inglés 5</option>
                <option value="Inglés 6" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 6' ? 'selected' : '' }}>Inglés 6</option>
                <option value="Inglés 7" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 7' ? 'selected' : '' }}>Inglés 7</option>
                <option value="Inglés 8" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 8' ? 'selected' : '' }}>Inglés 8</option>
                <option value="Inglés 9" {{ old('materia_modulo', $modulo?->materia_modulo) == 'Inglés 9' ? 'selected' : '' }}>Inglés 9</option>
            </select>
            {!! $errors->first('materia_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="estado_modulo" class="form-label">{{ __('Estado') }}</label>
            <select name="estado_modulo" class="form-control @error('estado_modulo') is-invalid @enderror"
                id="estado_modulo">
                <option value="1" {{ old('estado_modulo', $modulo?->estado_modulo) == 1 ? 'selected' : '' }}>Activo
                </option>
                <option value="0" {{ old('estado_modulo', $modulo?->estado_modulo) == 0 ? 'selected' : '' }}>Inactivo
                </option>
            </select>
            {!! $errors->first('estado_modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>


    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-primary" href="{{ URL::previous() }}">Volver</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>