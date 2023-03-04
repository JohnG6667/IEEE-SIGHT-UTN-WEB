<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Event;
use App\Models\Tag;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $categories = Category::take(4)->orderBy('views', 'DESC')->get();

        $tags = Tag::take(4)->orderBy('views', 'DESC')->get();

        $popular_events = Event::where('status', 1)->orderBy('views', 'DESC')->paginate(4);

        return view('livewire.footer', compact('categories', 'tags', 'popular_events'));
    }
}
