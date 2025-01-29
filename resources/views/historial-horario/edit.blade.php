@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Historial Horario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Historial de Horario</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('historial-horarios.update', $historialHorario->id_historial) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('historial-horario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
