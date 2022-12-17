<?php

namespace App\Http\Livewire\Panel\Globals;

use App\Http\Helpers\Constant;
use App\Http\Helpers\Menu;
use Livewire\Component;

class SideBar extends Component
{

    public $menuItems;




    public function mount()
    {

        $this->menuItems = Menu::menuItems();

    }


    public function render()
    {
        return view('livewire.panel.globals.side-bar');
    }
}
