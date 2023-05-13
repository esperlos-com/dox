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
    public $menu;
    public $breadcrumb;

    public Document $document;

    public function mount(){


        $this->slug = request()->slug;

        if(!isset($this->slug)){
            $this->slug = Menu::where('pid','!=',null)->first()->slug;

        }

        $this->menu = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id',DocumentHelper::getLanguage());
        }])->where('slug', $this->slug)->first();



        $this->breadcrumb = $this->makeBreadcrumbs($this->menu);




        $this->document = Document::with(['document_tl'=>function($query){
                $query->where('language_id',DocumentHelper::getLanguage());
            }])->where('menu_id', $this->menu->id)
            ->where('version_id',DocumentHelper::getVersion())
            ->first()?? new Document();

    }



    public function render()
    {

        return view('livewire.website.components.document-home.content');
    }

    private function makeBreadcrumbs($menu){

        $parent = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id',DocumentHelper::getLanguage());
        }])->where('id', $menu->pid)->first();

        $breadcrumb['title'] =  $parent->menu_tl->title??$parent->title;
        $breadcrumb['child'] =  ['title'=>$menu->menu_tl->title??$menu->title];

        return $breadcrumb;
    }

}
