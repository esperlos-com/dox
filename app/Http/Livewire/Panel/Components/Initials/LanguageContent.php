<?php

namespace App\Http\Livewire\Panel\Components\Initials;

use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Language;
use Livewire\Component;
use Livewire\WithPagination;

class LanguageContent extends Component
{
    use WithPagination;

    public string $search = '';

    public $selectedItemId;

    public $urlWithoutParam;


    public Language $language;



    protected $rules = [
        'language.id' => 'required',
        'language.title' => 'required',
    ];




    public function paginationView()
    {
        return 'components.pagination-view';
    }

    public function mount()
    {

        $this->urlWithoutParam = Generators::urlWithoutParam();


        $this->language = new Language();


    }



    public function selectedItem($id)
    {
        $this->selectedItemId = $id;


        if ($id == null) {
            $this->language = new Language();
        } else {
            $this->language = Language::where('id',$id)->first();

        }

    }


    public function submit()
    {

        $this->validate();


        $this->language->save();

        $this->language = new Language();

        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());





    }


    public function delete()
    {
        Language::where('id',$this->selectedItemId)->delete();


        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());


        $this->selectedItemId = null;
        $this->language = new Language();

    }




    public function render()
    {
        $languages = Language::latest('created_at')->where(function ($query) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
            ->paginate(Show::PAGINATE_COUNT);
        return view('livewire.panel.components.initials.language-content',compact('languages'));
    }
}
