<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    protected $listeners = ['serviceUpdate'];

    public $service, $name, $description,$icon;

    public function serviceUpdate($id)
    {
        // fill $service with eloquent model with same id
        $this->service      = Service::findOrFail($id);
        $this->name         = $this->service->name;
        $this->description  = $this->service->description;
        $this->icon         = $this->service->icon;
        // reset validation
        $this->resetValidation();
        // show edit modal
        $this->dispatch('editModalToggle');
    }

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
        // validate the data
        $data = $this->validate();
        // update the data in database
        $this->service->update($data);

        // hide the modal
        $this->dispatch('editModalToggle');

        // refresh Services data component
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
