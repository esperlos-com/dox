<?php

namespace App\Http\Livewire\Website\Components\DocumentHome;

use App\Http\Helpers\DocumentHelper;
use App\Models\Document;
use App\Models\Menu;
use App\Models\Version;
use Livewire\Component;

class Content extends Component
{

    public $slug;

    public Document $document;
    public Menu $menu;


    public $menus;
    public $submenus;

    public function mount(){


        $this->slug = request()->slug;

        if(!isset($this->slug)){
            $this->slug = Menu::where('pid','!=',null)->first()->slug;

        }

        $this->menu = Menu::where('slug', $this->slug)->first();


        $menuIdsInThisVersion = Document::where('version_id',DocumentHelper::getVersion())->pluck('menu_id')->toArray();


        $this->menus = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id',DocumentHelper::getLanguage());
        }])->where('pid',null)->orderBy('order')->get();


        $this->submenus = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id',DocumentHelper::getLanguage());
        }])
            ->where('pid','!=',null)
            ->whereIn('id',$menuIdsInThisVersion)->orderBy('order')->get();



        $this->document = Document::with(['document_tl'=>function($query){
                $query->where('language_id',DocumentHelper::getLanguage());
            }])->where('menu_id', $this->menu->id)->first()?? new Document();

    }



    public function render()
    {



        return view('livewire.website.components.document-home.content');
    }
}
