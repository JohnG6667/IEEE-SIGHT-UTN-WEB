<div class="form-group">
    {!! Form::label('facebook', 'Url Facebook:') !!}
    {!! Form::text('facebook', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el url del facebook del usuario.',
    ]) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('instagram', 'Url Instagram:') !!}
    {!! Form::text('instagram', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese url del instagram del usuario',
        'readonly',
    ]) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('linkedin', 'Url Linkedin:') !!}
    {!! Form::text('linkedin', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese url del linkedin del usuario',
        'readonly',
    ]) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
