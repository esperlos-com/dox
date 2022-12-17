<?php

namespace App\Http\Livewire\Panel\Pages\Documents;

use Livewire\Component;

class DocumentManagement extends Component
{
    public function render()
    {
        return view('livewire.panel.pages.documents.document-management')->layout('layouts.panel.layout-panel');
    }
}
