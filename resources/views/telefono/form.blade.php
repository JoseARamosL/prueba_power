<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('RAM') }}
            {{ Form::text('RAM', $telefono->RAM, ['class' => 'form-control' . ($errors->has('RAM') ? ' is-invalid' : ''), 'placeholder' => 'Ram']) }}
            {!! $errors->first('RAM', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ROM') }}
            {{ Form::text('ROM', $telefono->ROM, ['class' => 'form-control' . ($errors->has('ROM') ? ' is-invalid' : ''), 'placeholder' => 'Rom']) }}
            {!! $errors->first('ROM', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('procesador') }}
            {{ Form::text('procesador', $telefono->procesador, ['class' => 'form-control' . ($errors->has('procesador') ? ' is-invalid' : ''), 'placeholder' => 'Procesador']) }}
            {!! $errors->first('procesador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>