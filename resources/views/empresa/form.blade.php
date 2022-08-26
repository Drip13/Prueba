<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre de la empresa') }}
            {{ Form::text('nombrempresa', $empresa->nombrempresa, ['class' => 'form-control' . ($errors->has('nombrempresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la empresa']) }}
            {!! $errors->first('nombrempresa', '<div class="invalid-feedback">El nombre de la empresa es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direccion', $empresa->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">La dirección de la empresa es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo electrónico') }}
            {{ Form::text('emailempresa', $empresa->emailempresa, ['class' => 'form-control' . ($errors->has('emailempresa') ? ' is-invalid' : ''), 'placeholder' => 'Correo electrónico']) }}
            {!! $errors->first('emailempresa', '<div class="invalid-feedback">El correo de la empresa es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::tel('telempresa', $empresa->telempresa, ['class' => 'form-control' . ($errors->has('telempresa') ? ' is-invalid' : ''), 'placeholder' => 'Telefono de la empresa']) }}
            {!! $errors->first('telempresa', '<div class="invalid-feedback">El telefono de la empresa es obligatorio</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Logo') }} </br>
            @if (isset($empresa->logo))
            <img src="{{ asset('uploads').'/'.$empresa->logo}}" width="200px"> 
            @endif
            <input type="file" name="logo" value="" id="logo">
        </div>
        <div class="form-group">
            {{ Form::label('Sitio Web') }}
            {{ Form::text('web', $empresa->web, ['class' => 'form-control' . ($errors->has('web') ? ' is-invalid' : ''), 'placeholder' => 'Sitio Web']) }}
            {!! $errors->first('web', '<div class="invalid-feedback">El sitio web de la empresa es obligatorio</div>') !!}
        </div>

        <br>
    </div>
        <div class="inverse">
            
            <div class="box-footer mt20">
        </div>
        <button type="submit" class="button1">Enviar</button>
    </div>
</div>