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
                                <span class="card-title">@lang('messages.empshow')</span>
                            </div>
                            <a href="{{ route('empleados.index') }}" class="btn btn-danger btn-sm"  data-placement="left">@lang('messages.back')</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>@lang('messages.empname'):</strong>
                            {{ $empleado->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.emplastname'):</strong>
                            {{ $empleado->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.emplastname2'):</strong>
                            {{ $empleado->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.empemail'):</strong>
                            {{ $empleado->emailempleado }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.emptel'):</strong>
                            {{ $empleado->telempleado }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.empcompany'):</strong>
                            {{ $empleado->empresa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
