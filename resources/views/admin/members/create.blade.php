@extends('adminlte::page')

@section('title', 'IEE SIGHT')

@section('content_header')
    <h1>Registrar Miembro</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.members.store']) !!}

            @include('admin.members.partials.form')

            {!! Form::submit('Registrar como miembro', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
