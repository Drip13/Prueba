<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del empleado') }}
            {{ Form::text('nombre1', $empleado->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Primer Apellido') }}
            {{ Form::text('apellido1', $empleado->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => '1er Apellido']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Segundo Apellido') }}
            {{ Form::text('apellido2', $empleado->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => '2do Apellido']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo electrónico') }}
            {{ Form::email('emailempleado', $empleado->emailempleado, ['class' => 'form-control' . ($errors->has('emailempleado') ? ' is-invalid' : ''), 'placeholder' => 'Correo electrónico']) }}
            {!! $errors->first('emailempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de contacto') }}
            {{ Form::text('telempleado', $empleado->telempleado, ['class' => 'form-control' . ($errors->has('telempleado') ? ' is-invalid' : ''), 'placeholder' => 'Telefono móvil']) }}
            {!! $errors->first('telempleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::select('empresa_id',$empresas, $empleado->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <br>
    </div>
        <div class="inverse">
            
            <div class="box-footer mt20">
        </div>
        <button type="submit" class="button1">Enviar</button>
    </div>
</div>

