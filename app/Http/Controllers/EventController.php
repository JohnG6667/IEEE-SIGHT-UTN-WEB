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

        $tags = Tag::take(8)->orderBy('views', 'DESC')->get();

        $popular_events = Event::where('status', 1)->orderBy('views', 'DESC')->paginate(4);

        return view('event.index', compact('events', 'tags', 'popular_events'));
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

        $tags = Tag::take(8)->orderBy('views', 'DESC')->get();

        $popular_events = Event::where('status', 1)->orderBy('views', 'DESC')->paginate(4);

        return view('event.category', compact('events', 'tags', 'popular_events', 'category'));
    }
}
