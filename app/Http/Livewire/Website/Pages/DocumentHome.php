<?php

namespace App\Http\Livewire\Website\Pages;

use App\Models\Document;
use App\Models\Menu;
use Livewire\Component;

class DocumentHome extends Component
{




    public function render()
    {


        return view('livewire.website.pages.document-home')->layout('layouts.website.layout-website');
    }
}
