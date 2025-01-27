@extends('layouts.app')

@section('template_title')
    {{ $modificacione->name ?? __('Show') . " " . __('Modificacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Modificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('modificaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modificacion:</strong>
                                    {{ $modificacione->id_modificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modulo:</strong>
                                    {{ $modificacione->id_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Maestro:</strong>
                                    {{ $modificacione->id_maestro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Grupo:</strong>
                                    {{ $modificacione->id_grupo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Modificacion:</strong>
                                    {{ $modificacione->estado_modificacion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
