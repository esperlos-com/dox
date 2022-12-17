<?php

namespace App\Http\Livewire\Panel\Components\Initials;

use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Version;
use Livewire\Component;
use Livewire\WithPagination;

class VersionContent extends Component
{
    use WithPagination;

    public string $search = '';

    public $selectedItemId;

    public $urlWithoutParam;


    public Version $version;



    protected $rules = [
        'version.title' => 'required',
    ];



    public function paginationView()
    {
        return 'components.pagination-view';
    }

    public function mount()
    {

        $this->urlWithoutParam = Generators::urlWithoutParam();

        $this->version = new Version();


    }



    public function selectedItem($id)
    {
        $this->selectedItemId = $id;


        if ($id == null) {
            $this->version = new Version();
        } else {
            $this->version = Version::find($id);


        }

    }


    public function submit()
    {

        $this->validate();


        $this->version->save();

        $this->version = new Version();

        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());


    }


    public function delete()
    {
        Version::find($this->selectedItemId)->delete();


        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());


        $this->selectedItemId = null;
        $this->version = new Version();

    }




    public function render()
    {
        $versions = Version::latest('created_at')->where(function ($query) {
            $query->where('title', 'LIKE', '%' . $this->search . '%');
        })
            ->paginate(Show::PAGINATE_COUNT);
        return view('livewire.panel.components.initials.version-content',compact('versions'));
    }
}
