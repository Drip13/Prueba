<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Primer Nombre') }}
            {{ Form::text('nombre1', $empleado->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido') }}
            {{ Form::text('apellido1', $empleado->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido') }}
            {{ Form::text('apellido2', $empleado->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email del empleado') }}
            {{ Form::text('emailempleado', $empleado->emailempleado, ['class' => 'form-control' . ($errors->has('emailempleado') ? ' is-invalid' : ''), 'placeholder' => 'Emailempleado']) }}
            {!! $errors->first('emailempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono del empleado') }}
            {{ Form::text('telempleado', $empleado->telempleado, ['class' => 'form-control' . ($errors->has('telempleado') ? ' is-invalid' : ''), 'placeholder' => 'Telempleado']) }}
            {!! $errors->first('telempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('empresa_id', $empresas, $empleado->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>