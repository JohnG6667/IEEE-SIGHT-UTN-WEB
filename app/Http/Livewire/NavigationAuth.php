<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class NavigationAuth extends Component
{
    public function render()
    {
        $categories = Category::take(5)->whereHas('events')->orderBy('views', 'DESC')->get();

        $tags = Tag::take(5)->whereHas('events')->orderBy('views', 'DESC')->get();

        return view('livewire.navigation-auth' , compact('categories', 'tags'));
    }
}
