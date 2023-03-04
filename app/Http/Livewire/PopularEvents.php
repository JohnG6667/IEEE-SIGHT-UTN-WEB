<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Tag;
use Livewire\Component;

class PopularEvents extends Component
{
    public function render()
    {
        $tags = Tag::take(8)->orderBy('views', 'DESC')->get();

        $popular_events = Event::where('status', 1)->orderBy('views', 'DESC')->paginate(4);

        return view('livewire.popular-events', compact('tags', 'popular_events'));
    }
}
