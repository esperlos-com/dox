<?php

namespace App\Http\Livewire\Panel\Components\Initials\TranslateTabs;

use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Language;
use App\Models\Menu;
use App\Models\MenuTl;
use App\Models\Setting;
use Livewire\Component;

class TranslateMenu extends Component
{


    public $selectedItemId;

    public string $search = '';

    public MenuTl $menuTl;
    public Setting $setting;


    protected $rules = [
        'menuTl.title' => 'nullable',
    ];




    public function mount(){

        $this->setting = Setting::find(1);
    }


    public function selectedItem($menuId)
    {
        $this->selectedItemId = $menuId;

        $menuTl = MenuTl::where('menu_id',$menuId)->where('language_id',$this->setting->language_id)->first();

        if($menuTl){

            $this->menuTl = $menuTl;
        }else{
            $this->menuTl = new MenuTl();
        }



    }


    public function submit()
    {

        //$this->validate();




        $this->menuTl->language_id = $this->setting->language_id;
        $this->menuTl->menu_id = $this->selectedItemId;


        if(empty($this->menuTl->title)){
            $this->menuTl->delete();
        }else{

            $this->menuTl->save();
        }

        $this->menuTl = new MenuTl();

        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());





    }


    public function render()
    {

        $menus = Menu::with(['menu_tl'=>function($query){
            $query->where('language_id', $this->setting->language_id);
        }])->where('title', 'LIKE', '%' . $this->search . '%')->paginate(Show::PAGINATE_COUNT);

        return view('livewire.panel.components.initials.translate-tabs.translate-menu',compact('menus'));
    }
}
