@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Horarios Oficiale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Horario</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('horarios-oficiales.update', $horariosOficiale->id_horariooficial) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('horarios-oficiale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
