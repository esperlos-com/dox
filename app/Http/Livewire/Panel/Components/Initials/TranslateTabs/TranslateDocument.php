<?php

namespace App\Http\Livewire\Panel\Components\Initials\TranslateTabs;

use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Document;
use App\Models\Menu;
use App\Models\DocumentTl;
use App\Models\Setting;
use Livewire\Component;

class TranslateDocument extends Component
{
    public $selectedItemId;

    public string $search = '';

    public DocumentTl $documentTl;
    public Setting $setting;


    protected $rules = [
        'documentTl.content' => 'nullable',
    ];





    public function mount(){

        $this->setting = Setting::find(1);
    }


    public function selectedItem($menuId)
    {
        $this->selectedItemId = $menuId;

        $documentTl = DocumentTl::where('menu_id',$menuId)->where('language_id',$this->setting->language_id)->first();

        if($documentTl){

            $this->documentTl = $documentTl;
        }else{
            $this->documentTl = new DocumentTl();
        }

    }


    public function submit()
    {



        $this->documentTl->language_id = $this->setting->language_id;
        $this->documentTl->menu_id = $this->selectedItemId;


        if(empty($this->documentTl->title)){
            $this->documentTl->delete();
        }else{

            $this->documentTl->save();
        }

        $this->documentTl = new DocumentTl();

        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());





    }


    public function render()
    {

        $documents = Document::with(['document_tl'=>function($query){
            $query->where('language_id', $this->setting->language_id);
        }])->where('content', 'LIKE', '%' . $this->search . '%')->paginate(Show::PAGINATE_COUNT);

        return view('livewire.panel.components.initials.translate-tabs.translate-document',compact('documents'));
    }
}
