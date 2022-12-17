<?php

namespace App\Http\Livewire\Panel\Pages\Documents;

use Livewire\Component;

class MenuManagement extends Component
{
    public function render()
    {
        return view('livewire.panel.pages.documents.menu-management')->layout('layouts.panel.layout-panel');
    }
}
