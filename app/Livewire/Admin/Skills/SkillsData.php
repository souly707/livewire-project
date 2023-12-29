<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    use WithPagination;

    protected $listeners = ['refreshData', '$refresh'];
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view(
            'admin.skills.skills-data',
            ['data' => Skill::where('name', 'like', "%$this->search%")->paginate(10)]
        );
    }
}
