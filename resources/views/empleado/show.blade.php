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
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $empleado->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $empleado->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $empleado->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Emailempleado:</strong>
                            {{ $empleado->emailempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Telempleado:</strong>
                            {{ $empleado->telempleado }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $empleado->empresa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
