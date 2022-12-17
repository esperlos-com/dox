<?php

namespace App\Http\Livewire\Panel\Components\Initials;

use App\Http\Helpers\FileHelper;
use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use Livewire\Component;
use Livewire\WithFileUploads;

class TranslateContent extends Component
{

    use WithFileUploads;


    public $urlWithoutParam;

    public $selectedTab = 1;


    public function mount()
    {


        $this->urlWithoutParam = Generators::urlWithoutParam();



    }

    public function changeTab($index){
        $this->selectedTab = $index;
    }





    public function render()
    {
        return view('livewire.panel.components.initials.translate-content');
    }
}
