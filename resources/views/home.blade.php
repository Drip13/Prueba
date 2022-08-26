@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido') }} <b>{{Auth::user()->name}}</b> </br>
                    {{__('Su id de usuario es')}} <b>{{Auth::user()->id}}</b> </br>
                    {{__('Su correo eléctronico de registro es')}} <b>{{Auth::user()->email}}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
