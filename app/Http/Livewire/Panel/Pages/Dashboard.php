<?php

namespace App\Http\Livewire\Panel\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.panel.pages.dashboard')->layout('layouts.panel.layout-panel');
    }
}
