@extends('layouts.app')

@section('template_title')
    {{ $telefono->name ?? "{{ __('Ver') Telefono" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Telefono</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telefonos.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ram:</strong>
                            {{ $telefono->RAM }}
                        </div>
                        <div class="form-group">
                            <strong>Rom:</strong>
                            {{ $telefono->ROM }}
                        </div>
                        <div class="form-group">
                            <strong>Procesador:</strong>
                            {{ $telefono->procesador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
