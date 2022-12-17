<?php

namespace App\Http\Livewire\Panel\Pages\Initials;

use Livewire\Component;

class VersionManagement extends Component
{
    public function render()
    {
        return view('livewire.panel.pages.initials.version-management')->layout('layouts.panel.layout-panel');
    }
}
