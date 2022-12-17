<?php

namespace App\Http\Livewire\Panel\Globals;

use App\Models\Language;
use App\Models\Setting;
use App\Models\Version;
use Livewire\Component;

class Header extends Component
{


    public $currentUrl;

    public $versions;
    public $languages;

    public Setting $setting;

    public $selectedVersion;
    public $selectedLanguage;


    public function mount(){

        $this->currentUrl = url()->current();

        $this->versions = Version::all();
        $this->languages = Language::all();

        $this->setting = Setting::find(1);


        $this->selectedLanguage = $this->setting->language_id;
        $this->selectedVersion = $this->setting->version_id;



    }


    public function updatedSelectedVersion(){


        $this->setting->version_id =  $this->selectedVersion;

        $this->setting->save();

        redirect($this->currentUrl);

    }

    public function updatedSelectedLanguage(){

        $this->setting->language_id =  $this->selectedLanguage;

        $this->setting->save();

        redirect($this->currentUrl);
    }


   public function logout(){

       auth()->logout();
       redirect('login');
       redirect('/');
   }


    public function render()
    {
        return view('livewire.panel.globals.header');
    }
}
