<?php

namespace App\Http\Livewire\Panel\Components\Media;

use App\Http\Helpers\Generators;
use App\Http\Helpers\Show;
use App\Http\Helpers\Strings;
use App\Models\Medium;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class MediaContent extends Component
{
    use WithPagination;

    public string $search = '';

    public $selectedItemId;

    public $urlWithoutParam;

    public Medium $medium;



    public function paginationView()
    {
        return 'components.pagination-view';
    }



    public function mount()
    {

        $this->urlWithoutParam = Generators::urlWithoutParam();



    }



    public function selectedItem($id)
    {
        $this->selectedItemId = $id;


        if ($id == null) {
            $this->medium = new Medium();
        } else {
            $this->medium = Medium::where('id',$id)->first();

        }

    }




    public function delete()
    {

        $medium = Medium::where('id',$this->selectedItemId)->first();


        try{
            unlink(".".$medium->url);
        }catch (Exception $e){

        }

        $medium->delete();





        Show::popupAlert(Show::ALERT_SUCCESS, $this, Strings::successMessage());


        $this->selectedItemId = null;
        $this->medium = new Medium();

    }





    public function render()
    {
        $media = Medium::latest('created_at')->where(function ($query) {
            $query->where('url', 'LIKE', '%' . $this->search . '%');
        })
            ->paginate(Show::PAGINATE_COUNT);
        return view('livewire.panel.components.media.media-content',compact('media'));
    }
}
