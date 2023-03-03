<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $events = Event::where('title', 'LIKE', '%' . $this->search . '%')
            ->orderBy('id')
            ->paginate(8);
        return view('livewire.admin.events-index', compact('events'));
    }
}
