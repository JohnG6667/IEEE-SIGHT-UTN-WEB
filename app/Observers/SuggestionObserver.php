<?php

namespace App\Observers;

use App\Models\Suggestion;

class SuggestionObserver
{
    public function creating(Suggestion $suggestion)
    {
        if (!\App::runningInConsole()) {
            $suggestion->user_id = auth()->user()->id;
        }
    }
}
