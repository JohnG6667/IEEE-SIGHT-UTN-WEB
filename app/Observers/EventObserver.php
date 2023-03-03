<?php

namespace App\Observers;

use App\Models\Event;

use Illuminate\Support\Facades\Storage;

class EventObserver
{
    /**
     * Handle the Event "created" event.
     *
     * @param  \App\Models\Event  $post
     * @return void
     */
    public function creating(Event $event)
    {
        if (!\App::runningInConsole()) {
            $event->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Event "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleting(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image->url);
        }
    }
}
