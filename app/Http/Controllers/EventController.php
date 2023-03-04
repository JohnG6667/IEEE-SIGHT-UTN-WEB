<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('status', 1)->latest('id')->paginate(6);

        return view('event.index', compact('events'));
    }

    public function show(Event $event)
    {
        Event::find($event->id)->increment('views');

        $event->category()->increment('views');

        foreach ($event->tags()->get() as $tag) {
            $tag->increment('views');
        }

        return view('event.show', compact('event'));
    }

    public function category(Category $category)
    {
        $events = Event::where('category_id', $category->id)
            ->where('status', 1)
            ->latest('id')
            ->paginate(6);

        $category->increment('views');

        return view('event.category', compact('events', 'category'));
    }

    public function tag(Tag $tag)
    {
        $events = $tag->events()->where('status', 1)
            ->latest('id')
            ->paginate(6);

        $tag->increment('views');

        return view('event.tag', compact('events', 'tag'));
    }
}
