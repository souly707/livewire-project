<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesData extends Component
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
            'admin.services.services-data',
            ['data' => Service::where('name', 'like', '%' . $this->search . '%')->paginate(10)]
        );
    }

}
