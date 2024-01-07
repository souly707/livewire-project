<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    protected $listeners = ['serviceDelete'];

    public $service;


    public function serviceDelete($id)
    {
        // dd($id);
        // fill $counter with eloquent model with same id
        $this->service = Service::findOrFail($id);
        // show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // Delete the data in database
        $this->service->delete();
        //reset the counter variable
        $this->reset('service');
        // hide the modal
        $this->dispatch('deleteModalToggle');
        // refresh skill data component
        $this->dispatch('refreshData')->to(ServicesData::class);
    }

    public function render()
    {
        return view('admin.services.services-delete');
    }
}
