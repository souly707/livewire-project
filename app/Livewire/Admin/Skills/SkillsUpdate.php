<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    protected $listeners = ['skillUpdate'];

    public $skill, $name, $progress;

    public function skillUpdate($id)
    {
        // fill $skill with eloquent model with same id
        $this->skill        = Skill::findOrFail($id);
        $this->name         = $this->skill->name;
        $this->progress     = $this->skill->progress;
        // reset validation
        $this->resetValidation();
        // show edit modal
        $this->dispatch('editModalToggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }
    public function submit()
    {
        // validate the data
        $data = $this->validate();
        // update the data in database
        $this->skill->update($data);
        // alert the user
        session()->flash('message', 'Record Updated Successfully');
        session()->flash('alert-type', 'primary');
        // hide the modal
        $this->dispatch('editModalToggle');
        // refresh skill data component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-update');
    }
}
