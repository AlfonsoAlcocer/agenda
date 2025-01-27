@extends('layouts.app')

@section('template_title')
    {{ $notificacione->name ?? __('Show') . " " . __('Notificacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Notificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('notificaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Notificacion:</strong>
                                    {{ $notificacione->id_notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Emisor Notificacion:</strong>
                                    {{ $notificacione->emisor_notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Receptor Notificacion:</strong>
                                    {{ $notificacione->receptor_notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion Notificacion:</strong>
                                    {{ $notificacione->descripcion_notificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Notificacion:</strong>
                                    {{ $notificacione->estado_notificacion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
