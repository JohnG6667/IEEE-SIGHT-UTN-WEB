<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el título de un evento.">
    </div>

    @if ($events->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Publicado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->created_at }}</td>
                            <td width='10px'>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.events.edit', $event) }}">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{ route('admin.events.destroy', $event) }}" class="form-delete"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm form-delete" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $events->links() }}
        </div>
    @else
        <div class="card-body">
            <strong>No hay ningún registro...</strong>
        </div>
    @endif
</div>
