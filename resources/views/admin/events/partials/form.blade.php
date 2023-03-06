<div class="form-group">
    {!! Form::label('title', 'Título:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título del evento.']) !!}

    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el título para generar el slug.',
        'readonly',
    ]) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('place', 'Lugar:') !!}
    {!! Form::text('place', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el el lugar del evento.']) !!}

    @error('place')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('entity', 'Entidad:') !!}
    {!! Form::text('entity', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la entidad beneficiaria.']) !!}

    @error('entity')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('event_date', 'Fecha de celebración:') !!}
    {!! Form::date('event_date', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese la fecha de celebración del evento.',
    ]) !!}

    @error('date_event')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>



<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group" style="border-bottom: 1px solid #adb5bd; margin-bottom: 15px;
padding-bottom: 15px;">
    <p class="font-weight-bold">Estado:</p>

    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset($event->image)
                <img id="picture" src="{{ Storage::url($event->image->url) }}">
            @else
                <img id="picture"
                    src="https://cdn.pixabay.com/photo/2016/08/16/09/53/international-conference-1597531_1280.jpg"
                    alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el Post.') !!}
            {!! Form::file('file', ['class' => 'form-control', 'accept' => 'image/*']) !!}

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <p>Utilizar imágenes de 640px por 480px.</p>

    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post:') !!}
    <p>Pegar solamente imágenes con formato svg, png, jpg. La imagen se mostrará según el tamaño de la misma.</p>

    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
