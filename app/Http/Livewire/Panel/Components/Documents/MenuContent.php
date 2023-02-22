<?php

namespace App\Http\Livewire\Panel\Components\Documents;

use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\FilteredModels\FilteredMenu;
use App\Models\FilteredModels\FilteredMenuTl;
use App\Models\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class MenuContent extends Component
{

    public string $search = '';

    public $selectedItemId;

    public $urlWithoutParam;


    public Menu $menu;

    public $submenus = [];

    protected $rules = [
        'menu.title' => 'required',
        'menu.slug' => 'required',
    ];




    public function mount()
    {

        $this->urlWithoutParam = Generators::urlWithoutParam();


        $this->menu = new Menu();


    }



    public function reorder($reorders){

        foreach($reorders as $reorder){
            $menu = Menu::find($reorder['id']);
            $menu->order = $reorder['order'];
            $menu->save();
        }
        $this->submenus = Menu::where('pid',$this->selectedItemId)->orderBy('order')->get();

    }




    public function selectedItem($id)
    {
        $this->selectedItemId = $id;

        if ($id == null) {
            $this->menu = new Menu();
        } else {
            $this->menu = Menu::find($id);

            $this->submenus = Menu::where('pid',$id)->get();

        }

    }

    public function selectedItemSubmenu($id)
    {
        $this->selectedItemId = $id;

        $this->submenus = Menu::where('pid',$id)->orderBy('order')->get();

        $this->emit('submenuReady');
    }


    public function submit($isSubmenu = false)
    {

        $this->validate();


        if($isSubmenu){
            $this->menu->pid = $this->selectedItemId;
        }

        $this->menu->save();

        $this->menu = new Menu();

        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());



    }


    public function delete()
    {
        Menu::find($this->selectedItemId)->delete();


        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());


        $this->selectedItemId = null;
        $this->menu = new Menu();

    }




    public function render()
    {
        $menus = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id', 'en');
        }])->where('pid',null)->orderBy('order')->where(function ($query) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
            ->paginate(Show::PAGINATE_COUNT);
        return view('livewire.panel.components.documents.menu-content',compact('menus'));
    }
}
