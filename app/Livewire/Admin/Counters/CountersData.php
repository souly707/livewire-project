<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersData extends Component
{
    use WithPagination;

    protected $listeners = ['refreshData', '$refresh'];
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view(
            'admin.counters.counters-data',
            ['data' => Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }
}
