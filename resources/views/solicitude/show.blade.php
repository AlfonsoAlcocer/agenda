@extends('layouts.app')

@section('template_title')
    {{ $solicitude->name ?? __('Show') . " " . __('Solicitude') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('solicitudes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Solicitud:</strong>
                                    {{ $solicitude->id_solicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Emisor Solicitudes:</strong>
                                    {{ $solicitude->emisor_solicitudes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Modulo:</strong>
                                    {{ $solicitude->id_modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Solicitud:</strong>
                                    {{ $solicitude->estado_solicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Solicitud:</strong>
                                    {{ $solicitude->descripcion_solicitud }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
