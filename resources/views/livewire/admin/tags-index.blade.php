<div>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de la Etiqueta">
    </div>
    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->views }}</td>
                            <td width="10px">

                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.tags.edit', $tag) }}">Editar</a>

                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" class="form-delete"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $tags->links() }}
        </div>
    </div>
</div>
