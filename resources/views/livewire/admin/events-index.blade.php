<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post.">
    </div>

    @if ($events->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Vistas</th>
                        <th>Publicado</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            @if ($event->status == 2)
                                <td style="color: green">
                                    Si
                                </td>
                            @else
                                <td style="color: red">
                                    No
                                </td>
                            @endif
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
<div id="calendar">
</div>





<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek'
            },
            today: 'today2',
            locale: 'esLocale',
            editable: true,
            eventClick: function(info) {
                alert('Slug: ' + info.event.id);
                let eventSlug = info.event.id; // Aquí debes asignar el ID real de la categoría
                let url = "{{ route('admin.events.edit', ['event' => ':slug']) }}";
                url = url.replace(':slug', eventSlug);
                window.location.href = url;
            },
            droppable: true,
            eventDrop: function(info) {
                alert("Evento de id: " + info.event.id + " " + info.event.title +
                    " was dropped on " + info.event.start.toISOString());

                if (!confirm("Are you sure about this change?")) {
                    info.revert();
                }
            },
            drop: function(info) {
                alert('Ha dado click ')
                console.log('Ha dado click!');
            },
            height: 650,
            events: @json($eventsCalendar)
        });
        calendar.render();
    });
</script>


<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
