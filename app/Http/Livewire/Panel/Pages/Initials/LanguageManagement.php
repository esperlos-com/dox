<?php

namespace App\Http\Livewire\Panel\Pages\Initials;

use Livewire\Component;

class LanguageManagement extends Component
{
    public function render()
    {
        return view('livewire.panel.pages.initials.language-management')->layout('layouts.panel.layout-panel');
    }
}
