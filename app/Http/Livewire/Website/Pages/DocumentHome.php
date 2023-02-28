<?php

namespace App\Http\Livewire\Website\Pages;

use App\Http\Helpers\Strings;
use App\Models\Menu;
use Livewire\Component;

class DocumentHome extends Component
{

    public function mount()
    {
        $slug = request()->slug;
        if (!isset($slug)) {
            $slug = Menu::where('pid', '!=', null)->first()->slug;
            redirect()->to(Strings::DOCUMENT_URL_PREFIX.$slug  );
        }


    }


    public function render()
    {


        return view('livewire.website.pages.document-home')->layout('layouts.website.layout-website');
    }
}
