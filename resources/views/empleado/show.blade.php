@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <span class="card-title">Detalles del empleado</span>
                            </div>
                            <a href="{{ route('empleados.index') }}" class="btn btn-danger btn-sm"  data-placement="left">{{ __('Atrás') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $empleado->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $empleado->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $empleado->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $empleado->emailempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->telempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $empleado->empresa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
