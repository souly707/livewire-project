<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
protected $listeners = ['skillDelete'];

    public $skill;


    public function skillDelete($id)
    {
        // fill $skill with eloquent model with same id
        $this->skill = Skill::findOrFail($id);
        // show edit modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // Delete the data in database
        $this->skill->delete();
        //reset the skill variable
        $this->reset('skill');
        // alert the user
        session()->flash('message', 'Record Deleted Successfully');
        session()->flash('alert-type', 'primary');
        // hide the modal
        $this->dispatch('deleteModalToggle');
        // refresh skill data component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
