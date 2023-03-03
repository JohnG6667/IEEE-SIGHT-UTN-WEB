@extends('adminlte::page')

@section('title', 'IEEE SIGTH')

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.form-delete').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Está seguro de eliminar?',
                text: "!No podrá revertir este cambio!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit()
                }
            })
        });
    </script>
@endsection

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}">Agregar Etiqueta</a>

    <h1>Lista de Etiqueta</h1>
@stop

@section('content')
    @livewire('admin.tags-index')
@stop
