@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.dashboard')</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @lang('messages.welcome') <b>{{Auth::user()->name}}</b> </br>
                    @lang('messages.messageid') <b>{{Auth::user()->id}}</b> </br>
                    @lang('messages.messageemail') <b>{{Auth::user()->email}}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
