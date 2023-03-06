<?php

namespace App\Http\Livewire\Admin;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class MembersIndex extends Component
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
        $members = Member::where('user.name', 'LIKE', '%' . $this->search . '%')
            ->orderBy('id')
            ->paginate(8);
        return view('livewire.admin.members-index', compact('members'));
    }
}
