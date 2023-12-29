<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{

    public $name;
    public $progress;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save the data in database
        Skill::create($data);
        // reset the input fields
        $this->reset('name', 'progress');
        // hide the modal
        $this->dispatch('createModalToggle');
        // refresh the skills component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
