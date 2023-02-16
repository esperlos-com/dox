<?php

namespace App\Http\Livewire\Panel\Components\Documents\Document;

use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Document;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class DocumentContent extends Component
{

    use WithPagination;

    public string $search = '';

    public $selectedItemId;

    public $urlWithoutParam;
    public $urlParamId;

    public $status;

    public Setting $setting;

    public Document $document;


    public $selectedProvince;

    public function paginationView()
    {
        return 'components.pagination-view';
    }

    public function mount()
    {

        $this->urlWithoutParam = Generators::urlWithoutParam();
        $this->urlParamId = request()->id;

        $this->setting = Setting::find(1);

        $this->document = new Document();
    }



    public function selectedItem($id)
    {

        $this->selectedItemId = $id;

        if ($id == null) {
            $this->document = new Document();
        } else {
            $this->document = Document::find($id);

        }

    }


    public function delete()
    {
        Document::find($this->selectedItemId)->delete();


        Show::popupAlert(Show::ALERT_SUCCESS, $this,Strings::successMessage());


        $this->selectedItemId = null;
        $this->document = new Document();

    }





    public function render()
    {
        $documents = Document::with(['menu'])->where('version_id',$this->setting->version_id)->latest('created_at')->where(function ($query) {
            $query->where('content', 'LIKE', '%' . $this->search . '%');
        })
            ->paginate(Show::PAGINATE_COUNT);

        return view('livewire.panel.components.documents.document.document-content',compact('documents'));
    }
}
