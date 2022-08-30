<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            @lang('messages.compname')
            {{ Form::text('nombrempresa', $empresa->nombrempresa, ['class' => 'form-control' . ($errors->has('nombrempresa') ? ' is-invalid' : ''), 'placeholder' => __('messages.compname')]) }}
            {!! $errors->first('nombrempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.compadress')
            {{ Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => __('messages.compadress')]) }}
            <div class="invalid-feedback">{!! $errors->first('direccion', __('messages.erroradress')) !!}</div>
            
        </div>
        <div class="form-group">
            @lang('messages.compemail')
            {{ Form::email('emailempresa', $empresa->emailempresa, ['class' => 'form-control' . ($errors->has('emailempresa') ? ' is-invalid' : ''), 'placeholder' => __('messages.compemail')]) }}
            {!! $errors->first('emailempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.comptel')
            {{ Form::tel('telempresa', $empresa->telempresa, ['class' => 'form-control' . ($errors->has('telempresa') ? ' is-invalid' : ''), 'placeholder' => __('messages.comptel')]) }}
            {!! $errors->first('telempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.complogo') </br>
            @if (isset($empresa->logo))
            <img src="{{ asset('uploads').'/'.$empresa->logo}}" width="200px"> 
            @endif
            <input type="file" name="logo" value="" id="logo">
            @if ($errors->has('logo'))
            <div class="alert alert-danger" role="alert">
                <ul><li>@lang('messages.errorlogo')</li></ul>
            </div>
            @endif
        </div>
        <div class="form-group">
            @lang('messages.compweb')
            {{ Form::text('web', $empresa->web, ['class' => 'form-control' . ($errors->has('web') ? ' is-invalid' : ''), 'placeholder' => __('messages.compweb')]) }}
            <div class="invalid-feedback">{!! $errors->first('web', ':message') !!}</div>
            
        </div>

        <br>
    </div>
        <div class="inverse">
            
            <div class="box-footer mt20">
        </div>
        <button type="submit" class="button1">@lang('messages.send')</button>
    </div>
</div>