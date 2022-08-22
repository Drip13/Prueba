<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empresa->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emailempresa') }}
            {{ Form::text('emailempresa', $empresa->emailempresa, ['class' => 'form-control' . ($errors->has('emailempresa') ? ' is-invalid' : ''), 'placeholder' => 'Emailempresa']) }}
            {!! $errors->first('emailempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telempresa') }}
            {{ Form::text('telempresa', $empresa->telempresa, ['class' => 'form-control' . ($errors->has('telempresa') ? ' is-invalid' : ''), 'placeholder' => 'Telempresa']) }}
            {!! $errors->first('telempresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('logo') }}
            {{ Form::text('logo', $empresa->logo, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : ''), 'placeholder' => 'Logo']) }}
            {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('web') }}
            {{ Form::text('web', $empresa->web, ['class' => 'form-control' . ($errors->has('web') ? ' is-invalid' : ''), 'placeholder' => 'Web']) }}
            {!! $errors->first('web', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>