<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = Setting::findOrFail(1);
        // dd($this->settings);
    }

    public function rules()
    {
        return [
            'settings.name'         => ['required', 'string'],
            'settings.email'        => ['required', 'email', 'string'],
            'settings.phone'        => ['required', 'numeric'],
            'settings.address'      => ['required', 'string'],
            'settings.facebook'     => ['nullable', 'url'],
            'settings.twitter'      => ['nullable', 'url'],
            'settings.linkedin'     => ['nullable', 'url'],
            'settings.instagram'    => ['nullable', 'url'],
        ];
    }
    public function submit()
    {
        $this->validate();
        $this->settings->save();
        \session()->flash('message', 'Settings Updated Successfully');
        \session()->flash('alert-type', 'primary');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
