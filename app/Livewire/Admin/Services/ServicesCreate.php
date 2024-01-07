<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name, $description, $icon;

    public function rules()
    {
        return [
            'name'          => 'required|string',
            'description'   => 'required|string',
            'icon'          => 'required|string',
        ];
    }

    public function submit()
    {
        // Validate the form
        $data = $this->validate();
        // Create The Data in database
        Service::create($data);
        // Reset the Fields
        $this->reset(['name', 'description', 'icon']);
        // Hide The Modal
        $this->dispatch('createModalToggle');
        // Refresh The Counter Data Component
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-create');
    }
}
