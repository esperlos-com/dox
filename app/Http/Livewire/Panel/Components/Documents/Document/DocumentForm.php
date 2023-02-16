<?php

namespace App\Http\Livewire\Panel\Components\Documents\Document;

use App\Http\Helpers\FileHelper;
use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Document;
use App\Models\DocumentTl;
use App\Models\Menu;
use App\Models\Setting;
use Livewire\Component;

class DocumentForm extends Component
{


    public $urlWithoutParam;
    public $previousUrl;
    public $requestId;
    public bool $isFromTranslate = false;
    public string $translatedContent;

    public Document $document;
    public Setting $setting;

    public $menus;
    public $submenus;


    protected $rules = [
        'document.content' => 'required',
        'document.menu_id' => 'required',

    ];

    protected $validationAttributes = [

        'document.menu_id' => 'منو',
    ];



    public function mount()
    {


        $this->urlWithoutParam = Generators::urlWithoutParam();
        $this->previousUrl = url()->previous();
        $this->requestId = request()->id;



        $this->setting = Setting::find(1);

        $this->menus = Menu::where('pid',null)->get();
        $this->submenus = Menu::where('pid','!=',null)->get();

        if (request()->id != -1) {
            $this->document = Document::find(request()->id);

            if(request()->type === 'translate'){
                $this->isFromTranslate = true;

                $documentTl = DocumentTl::where('document_id',request()->id)->where('language_id',$this->setting->language_id)->first();

                $this->translatedContent = $documentTl->content;

            }

        } else {
            $this->document = new Document();

        }



    }




    public function submit()
    {

        $this->validate();

        if($this->isFromTranslate){

            $documentTl = new DocumentTl();

            $documentTl->language_id = $this->setting->language_id;
            $documentTl->document_id = $this->requestId;
            $documentTl->content = $this->translatedContent;

            $documentTl->save();

        }else{
            $this->document->version_id = $this->setting->version_id;
            $this->document->save();

        }


        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());

    }


    public function render()
    {

        return view('livewire.panel.components.documents.document.document-form');
    }
}
