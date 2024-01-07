<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $service, $name, $description;

    protected $listeners =['serviceShow'];

    public function serviceShow($id) {
        // fill the service with the eloquent model
        $this->service      = Service::findOrFail($id);
        $this->name         = $this->service->name;
        $this->description  = $this->service->description;
        // show the modal
        $this->dispatch('showModalToggle');

    }

    public function render()
    {
        return view('admin.services.services-show');
    }
}
