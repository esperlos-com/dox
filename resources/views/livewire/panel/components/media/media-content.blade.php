<div class="card">


    <div class="card-body">

        <div style="display:flex; justify-content:space-between;align-items:start">
            <h5 class="card-title">@lang('panel/global.media.content.title')</h5>

        </div>

        <div class="form-group">
            <input wire:model.debounce500="search" class="form-control" type="text"
                   placeholder="@lang('panel/global.search')">
        </div>

        <div class="row">

            @foreach($media as $index=>$mainItem)



                    <div class="col-3 py-4">
                        <div class="border border-primary d-flex flex-column ">
                            <img src="{{$mainItem->url}}" alt="" width="100%" style="aspect-ratio:1; object-fit: contain">
                            <div class="d-flex ">
                                <input class="flex-grow-1" value="{{str_replace('storage/uploads/','',$mainItem->url)}}">


                                <a data-toggle="modal" data-target="#deleteModal" style="cursor: pointer"
                                   wire:click.prevent="selectedItem('{{$mainItem->id}}')">
                                    <i class="fa fa-close bg-danger p-2 text-white " ></i>
                                </a>
                            </div>
                        </div>
                    </div>


            @endforeach
        </div>
        {{$media->links()}}

    </div>


    <!--begin::Delete Modal-->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">@lang('confirmation.delete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>@lang('confirmation.delete.body')</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">خیر
                    </button>
                    <button data-dismiss="modal" type="button" class="btn btn-danger"
                            wire:click="delete">بله
                    </button>
                </div>
            </div>
        </div>


    </div>
    <!--end::Delete Modal-->


</div>



