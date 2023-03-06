<?php

namespace App\Observers;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventObserver
{

    public function creating(Event $event)
    {
        if (!\App::runningInConsole()) {
            $event->user_id = auth()->user()->id;
        }
    }


    public function deleting(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image->url);
        }
    }
}
