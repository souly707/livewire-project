<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    protected $listeners = ['counterUpdate', 'alertMessage'];

    public $counter, $name, $count,$icon;

    public function counterUpdate($id)
    {
        // fill $skill with eloquent model with same id
        $this->counter      = Counter::findOrFail($id);
        $this->name         = $this->counter->name;
        $this->count        = $this->counter->count;
        $this->icon         = $this->counter->icon;
        // reset validation
        $this->resetValidation();
        // show edit modal
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'count' => 'required|numeric|min:1',
            'icon' => 'required|string',
        ];
    }
    public function submit()
    {
        // validate the data
        $data = $this->validate();
        // update the data in database
        $this->counter->update($data);
        // alert the user
        // session()->flash('message', 'Record Updated Successfully');
        // session()->flash('alert-type', 'primary');
        // hide the modal
        $this->dispatch('editModalToggle');
        $this->dispatch('alert-message');

        // refresh skill data component
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
