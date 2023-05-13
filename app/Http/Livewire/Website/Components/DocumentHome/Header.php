<?php

namespace App\Http\Livewire\Website\Components\DocumentHome;

use App\Http\Helpers\DocumentHelper;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Version;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class Header extends Component
{


    public $currentUrl;

    public $versions;
    public $languages;

    public $selectedVersion;
    public $selectedLanguage;

    public array $menus = [];

    protected $listeners = ['search'=>'search'];

    public function mount(){

        $this->currentUrl = url()->current();

        $this->versions = Version::all();
        $this->languages = Language::all();

        $this->selectedVersion = DocumentHelper::getVersion();
        $this->selectedLanguage = DocumentHelper::getLanguage();


        $this->menus = Menu::where('pid','!=',null)->skip(0)->take(10)->get()->toArray();

        $this->emit('getSearchData',$this->menus);

    }
    public function search($text){

        $this->menus = Menu::where('title','like','%'.$text.'%')
            ->where('pid','!=',null)->skip(0)->take(10)->get()->toArray();

        $this->emit('getSearchData',$this->menus);
    }


    public function updatedSelectedVersion(){


        session()->put('version',$this->selectedVersion);

        redirect($this->currentUrl);
    }


    public function updatedSelectedLanguage(){


        session()->put('language',$this->selectedLanguage);
        app()->setLocale($this->selectedLanguage);

        redirect($this->currentUrl);
    }


    public function render()
    {
        return view('livewire.website.components.document-home.header');
    }
}
