<?php

namespace App\Http\Livewire\Website\Components\DocumentHome;

use App\Http\Helpers\DocumentHelper;
use App\Models\Language;
use App\Models\Version;
use Livewire\Component;

class Header extends Component
{


    public $currentUrl;

    public $versions;
    public $languages;

    public $selectedVersion;
    public $selectedLanguage;

    public function mount(){

        $this->currentUrl = url()->current();



        $this->versions = Version::all();
        $this->languages = Language::all();



        $this->selectedVersion = DocumentHelper::getVersion();
        $this->selectedLanguage = DocumentHelper::getLanguage();



    }


    public function updatedSelectedVersion(){


        session()->put('version',$this->selectedVersion);

        redirect($this->currentUrl);
    }


    public function updatedSelectedLanguage(){


        session()->put('language',$this->selectedLanguage);

        redirect($this->currentUrl);
    }


    public function render()
    {
        return view('livewire.website.components.document-home.header');
    }
}
