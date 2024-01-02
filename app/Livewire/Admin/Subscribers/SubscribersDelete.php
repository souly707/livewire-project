<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    protected $listeners = ['subscriberDelete'];

    public $subscriber;


    public function subscriberDelete($id)
    {
        // dd($id);
        // fill $subscriber with eloquent model with same id
        $this->subscriber = Subscriber::find($id);
        // show Delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // Delete the data in database
        $this->subscriber->delete();
        // alert the user
        // session()->flash('message', 'Record Deleted Successfully');
        // session()->flash('alert-type', 'primary');
        //reset the subscriber variable
        $this->reset('subscriber');
        // hide the modal
        $this->dispatch('deleteModalToggle');
        // refresh subscriber data component
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
