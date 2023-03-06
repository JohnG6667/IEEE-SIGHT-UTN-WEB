@extends('adminlte::page')

@section('title', 'IEE SIGHT')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($member, ['route' => ['admin.members.update', $member], 'method' => 'put']) !!}

            @include('admin.members.partials.form')

            {!! Form::submit('Actualizar Membresía', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
