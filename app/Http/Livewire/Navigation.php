<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::take(5)->orderBy('views', 'DESC')->get();

        $tags = Tag::take(5)->orderBy('views', 'DESC')->get();

        return view('livewire.navigation' , compact('categories', 'tags'));
    }
}
