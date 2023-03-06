<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class EventsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;
    public $open = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $events = Event::where('title', 'LIKE', '%' . $this->search . '%')
            ->orderBy('id')
            ->paginate(8);

        $eventsCalendar = [];

        foreach ($events as $event) {
            $eventsCalendar[] = [
                'id' => $event->slug,
                'slug' => $event->slug,
                'title' => $event->title,
                'start' => $event->event_date,
                'end' => $event->event_date,

            ];
        }





        return view('livewire.admin.events-index', compact('events', 'eventsCalendar'));
    }
}
