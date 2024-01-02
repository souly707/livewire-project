<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;

class SubscribersData extends Component
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
        return view('admin.subscribers.subscribers-data',
        ['data' => Subscriber::where('email','like','%'. $this->search .'%')->paginate(10)]);
    }
}
