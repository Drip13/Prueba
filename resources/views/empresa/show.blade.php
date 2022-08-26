@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <span class="card-title">Detalles de la Empresa</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-danger btn-sm" href="{{ route('empresas.index') }}"> Atrás</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de la empresa:</strong>
                            {{ $empresa->nombrempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $empresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $empresa->emailempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telempresa:</strong>
                            {{ $empresa->telempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            <img src="{{ asset('uploads').'/'.$empresa->logo}}" width="300" >
                        </div>
                        <div class="form-group">
                            <br>
                            <strong>Sitio Web:</strong>
                            {{ $empresa->web }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
