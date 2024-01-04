<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    protected $listeners = ['counterDelete'];

    public $counter;


    public function counterDelete($id)
    {
        // dd($id);
        // fill $counter with eloquent model with same id
        $this->counter = Counter::findOrFail($id);
        // show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // Delete the data in database
        $this->counter->delete();
        // // alert the user
        // session()->flash('message', 'Record Deleted Successfully');
        // session()->flash('alert-type', 'primary');
        //reset the counter variable
        $this->reset('counter');
        // hide the modal
        $this->dispatch('deleteModalToggle');
        // refresh skill data component
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
