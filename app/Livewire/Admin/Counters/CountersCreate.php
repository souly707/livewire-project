<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name, $count, $icon;

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
        // Validate the form
        $data = $this->validate();
        // Create The Data in database
        Counter::create($data);
        // Reset the Fields
        $this->reset(['name', 'count', 'icon']);
        // Hide The Modal
        $this->dispatch('createModalToggle');
        // Refresh The Counter Data Component
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
