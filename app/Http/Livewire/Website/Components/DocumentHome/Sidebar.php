<?php

namespace App\Http\Livewire\Website\Components\DocumentHome;

use App\Http\Helpers\DocumentHelper;
use App\Models\Document;
use App\Models\Menu;
use App\Models\Version;
use Livewire\Component;

class Sidebar extends Component
{

    public $slug;


    public Menu $menu;
    public Menu $parent;



    public function mount(){


        $this->slug = request()->slug;

        if(!isset($this->slug)){
            $this->slug = Menu::where('pid','!=',null)->first()->slug;

        }




        $this->menu = Menu::where('slug', $this->slug)->first();

        $this->parent = Menu::where('id',  $this->menu->pid)->first();


 /*       $menuIdsInThisVersion = Document::where('version_id',DocumentHelper::getVersion())->pluck('menu_id')->toArray();


        */


    }



    public function render()
    {

        // default language is en
        $menus = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id',app()->getLocale());
        },'submenus.menu_tl'])->where('pid'.null)->orderBy('order')->get();



        return view('livewire.website.components.document-home.sidebar',compact('menus'));
    }
}
