@extends('layouts.app')

@section('template_title')
    Create Empresa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span class="card-title">@lang('messages.companycreate')</span>
                            <a href="{{ route('empresas.index') }}" class="btn btn-danger btn-sm"  data-placement="left">@lang('messages.cancel')</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('empresas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empresa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
