<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.events.index');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.events.create', compact('categories', 'tags'));
    }

    public function store(EventRequest $request)
    {
        $event = Event::create($request->all());

        if ($request->file('file')) {
            $url = Storage::disk('public')->put('events', $request->file('file'));

            $event->image()->create([
                'url' => $url
            ]);
        }

        Cache::flush();


        return redirect()->route('admin.events.edit', $event);
    }

    public function edit(Event $event)
    {
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.events.edit', compact('event', 'tags', 'categories'))->with('info', 'El evento se registró con éxito');
    }




    public function update(EventRequest $request, Event $event)
    {

        $event->update($request->all());

        if ($request->file('file')) {
            $url = Storage::disk('public')->put('events', $request->file('file'));

            if ($event->image) {
                Storage::disk('public')->delete($event->image->url);

                $event->image->update([
                    'url' => $url
                ]);
            } else {
                $event->image()->create([
                    'url' => $url
                ]);
            }
        }

        if ($request->tags) {
            $event->tags()->sync($request->tags);
        }

        Cache::flush();

        return redirect()->route('admin.events.edit', $event)->with('info', 'El evento se actualizó con éxito');
    }

    public function destroy(Request $request, Event $event)
    {

        $event->delete();
        Cache::flush();
        return redirect()->route('admin.events.index')->with('info', 'El evento se eliminó con éxito');
    }
}
