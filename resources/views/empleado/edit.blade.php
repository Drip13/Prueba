@extends('layouts.app')

@section('template_title')
    Update Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                

                @includeif('partials.errors')
                
                <div class="card card-default">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">Actualización de Empleado</span>
                                <div class="float-right">
                                    <a href="{{ route('empleados.index') }}" class="btn btn-danger btn-sm"  data-placement="left">
                                        {{ __('Atrás') }}
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('empleados.update', $empleado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('empleado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
