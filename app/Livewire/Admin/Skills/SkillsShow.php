<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $skill, $progress, $name;

    protected $listeners =['skillShow'];

    public function skillShow($id) {
        // fill the skill with the eloquent model
        $this->skill     = Skill::findOrFail($id);
        $this->name      = $this->skill->name;
        $this->progress  = $this->skill->progress;
        // show the modal
        $this->dispatch('showModalToggle');

    }
    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
