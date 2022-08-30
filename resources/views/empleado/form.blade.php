<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            @lang('messages.empname')
            {{ Form::text('nombre1', $empleado->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => __('messages.empname')]) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.emplastname')
            {{ Form::text('apellido1', $empleado->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => __('messages.emplastname')]) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.emplastname2')
            {{ Form::text('apellido2', $empleado->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => __('messages.emplastname2')]) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.empemail')
            {{ Form::email('emailempleado', $empleado->emailempleado, ['class' => 'form-control' . ($errors->has('emailempleado') ? ' is-invalid' : ''), 'placeholder' => __('messages.empemail')]) }}
            {!! $errors->first('emailempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.emptel')
            {{ Form::tel('telempleado', $empleado->telempleado, ['class' => 'form-control' . ($errors->has('telempleado') ? ' is-invalid' : ''), 'placeholder' => __('messages.emptel')]) }}
            {!! $errors->first('telempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            @lang('messages.empcompany')
            {{ Form::select('empresa_id',$empresas, $empleado->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => __('messages.companies')]) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">La empresa es obligatoria</div>') !!}
        </div>
    <br>
    </div>
        <div class="inverse">
            
            <div class="box-footer mt20">
        </div>
        <button type="submit" class="button1">@lang('messages.send')</button>
    </div>
</div>

