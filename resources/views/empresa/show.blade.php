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
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Emailempresa:</strong>
                            {{ $empresa->emailempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telempresa:</strong>
                            {{ $empresa->telempresa }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $empresa->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Web:</strong>
                            {{ $empresa->web }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
