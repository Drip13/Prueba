@extends('layouts.app')

@section('template_title')
    Create Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                    
                    <div class="card card-default">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span class="card-title">Creación de empleado</span>
                                <a href="{{ route('empleados.index') }}" class="btn btn-danger btn-sm"  data-placement="left">{{ __('Cancelar') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empleados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
