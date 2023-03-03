<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy('id')
            ->paginate(8);
        return view('livewire.admin.categories-index', compact('categories'));
    }
}
