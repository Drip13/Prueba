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
                                <span class="card-title">@lang('messages.companyshow')</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-danger btn-sm" href="{{ route('empresas.index') }}">@lang('messages.back')</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>@lang('messages.compname'):</strong>
                            {{ $empresa->nombrempresa }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.compadress'):</strong>
                            {{ $empresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.compemail'):</strong>
                            {{ $empresa->emailempresa }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.comptel'):</strong>
                            {{ $empresa->telempresa }}
                        </div>
                        <div class="form-group">
                            <strong>@lang('messages.complogo'):</strong>
                            <img src="{{ asset('uploads').'/'.$empresa->logo}}" width="300" >
                        </div>
                        <div class="form-group">
                            <br>
                            <strong>@lang('messages.compweb'):</strong>
                            {{ $empresa->web }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
