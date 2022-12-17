<div class="card">


    <div class="card-body">

        <div style="display:flex; justify-content:space-between;align-items:start">
            <h5 class="card-title">لیست دسته بندی نوع سایت</h5>
            <a data-toggle="modal" data-target="#add" wire:click="selectedItem(null)"
               class="btn btn-success text-white ">
                <i class="ti-plus"></i>
            </a>
        </div>


        <ul id="mainReorderList" drag-root class="list-group">
            @foreach($menus as $key=>$mainItem)
                <li drag-item="{{$mainItem->id}}" drag-item-order="{{$key}}"
                    wire:key="title.menu.{{$mainItem->id}}" draggable="true"
                    class="list-group-item d-flex justify-content-between">

                    <span>{{$mainItem->title}}</span>


                    <div class="d-flex">

                        <a data-toggle="modal" data-target="#submenu"
                           wire:click.prevent="selectedItemSubmenu({{$mainItem->id}})"
                           class="btn btn-success text-white">
                            <i class="ti-plus"></i>
                        </a>

                        <a data-toggle="modal" data-target="#add"
                           wire:click.prevent="selectedItem({{$mainItem->id}})"
                           class="mr-1 btn btn-success text-white">
                            <i class=" ti-pencil"></i>
                        </a>


                        <a data-toggle="modal" data-target="#deleteModal"
                           wire:click.prevent="selectedItem('{{$mainItem->id}}')"
                           class="btn mr-1 btn-danger text-white">
                            <i class="ti-trash"></i>
                        </a>
                    </div>

                </li>
            @endforeach
        </ul>

    </div>



    <!--begin::Submenu -->
    <div wire:ignore.self class="modal fade " id="submenu" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">افزودن زیر منو</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row align-items-end">

                        <div class="col-xl-5">
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input wire:model.defer="menu.title" type="text" class="form-control"
                                       id="title" placeholder="عنوان">

                                @error('menu.title')
                                <x-error-message>{{$message}}</x-error-message>@enderror
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="form-group">
                                <label for="slug">شناسه لینک(در صورتی که زیر فهرست ندارید)</label>
                                <input wire:model.defer="menu.slug" type="text" class="form-control"
                                       id="slug" placeholder="شناسه لینک(در صورتی که زیر فهرست ندارید)">

                                @error('menu.slug')
                                <x-error-message>{{$message}}</x-error-message>@enderror
                            </div>
                        </div>
                        <div class="col-xl-2 ">
                            <button type="button" class="btn btn-primary font-weight-bold form-group"
                                    wire:click="submit(true)">تایید
                            </button>
                        </div>
                    </div>


                    <ul id="subReorderList" drag-root class="list-group">
                        @foreach($submenus as $key=>$mainItem)
                            <li drag-item="{{$mainItem->id}}" drag-item-order="{{$key}}"
                                wire:key="sub.menu.{{$mainItem->id}}" draggable="true"
                                class="list-group-item d-flex justify-content-between">

                                <span>{{$mainItem->title}}</span>


                                <div class="d-flex">



                                    <a data-toggle="modal" data-target="#add"
                                       wire:click.prevent="selectedItem({{$mainItem->id}})"
                                       class="mr-1 btn btn-success text-white">
                                        <i class="ti-pencil"></i>
                                    </a>


                                    <a data-toggle="modal" data-target="#deleteModal"
                                       wire:click.prevent="selectedItem('{{$mainItem->id}}')"
                                       class="btn mr-1 btn-danger text-white">
                                        <i class="ti-trash"></i>
                                    </a>
                                </div>

                            </li>
                        @endforeach
                    </ul>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن
                    </button>
                </div>
            </div>
        </div>




    </div>
    <!--end::Submenu -->


    <!--begin::Add -->
    <div wire:ignore.self class="modal fade " id="add" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">افزودن زبان</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>

                <div class="modal-body">


                    <div class="row">

                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input wire:model.defer="menu.title" type="text" class="form-control"
                                       id="title" placeholder="عنوان">

                                @error('menu.title')
                                <x-error-message>{{$message}}</x-error-message>@enderror
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="slug">شناسه لینک(در صورتی که زیر فهرست ندارید)</label>
                                <input wire:model.defer="menu.slug" type="text" class="form-control"
                                       id="slug" placeholder="شناسه لینک(در صورتی که زیر فهرست ندارید)">

                                @error('menu.slug')
                                <x-error-message>{{$message}}</x-error-message>@enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">بستن
                    </button>
                    <button type="button" class="btn btn-primary font-weight-bold"
                            wire:click="submit">تایید
                    </button>
                </div>
            </div>
        </div>


    </div>
    <!--end::Add -->


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
                    <button type="button" class="btn btn-primary " data-dismiss="modal">@lang('panel/global.button.no')
                    </button>
                    <button data-dismiss="modal" type="button" class="btn btn-danger mx-1"
                            wire:click="delete">@lang('panel/global.button.yes')
                    </button>
                </div>
            </div>
        </div>


    </div>
    <!--end::Delete Modal-->


</div>



@push('custom-scripts')
    <script>

        function reorderList(id){

            let root = document.querySelector(id+'[drag-root]');


            root.querySelectorAll(id+' [drag-item]').forEach(function(item){



                item.addEventListener('dragstart', function(e){
                    console.log("start");
                    e.target.setAttribute('dragging',true);
                })

                item.addEventListener('drop', function(e){
                    console.log("drop");


                })

                item.addEventListener('dragenter', function(e){
                    console.log("dragenter");
                    e.target.style.background = 'wheat'
                    e.preventDefault();
                })
                item.addEventListener('dragleave', function(e){
                    console.log("dragleave");

                    e.target.style.background = 'white'

                    let draggingEl = root.querySelector(id+' [dragging]');
                    e.target.before(draggingEl);

                })

                item.addEventListener('dragend', function(e){
                    console.log("dragend");
                    e.target.removeAttribute('dragging');





                    root.querySelectorAll(id+' [drag-item]').forEach((item,index)=>{
                        item.setAttribute('drag-item-order',index);
                    })

                    /*      let orderIds = Array.from(root.querySelectorAll('[drag-item]')
                              .map(itemEl=>itemEl.getAttribute('drag-item')));*/


                    let nodes = root.querySelectorAll(id+' [drag-item]');
                    let reorder = [];
                    nodes.forEach(function(item){
                        reorder.push({
                            'id':item.getAttribute('drag-item'),
                            'order':item.getAttribute('drag-item-order')
                        })
                    });

                    let component = Livewire.find(
                        e.target.closest('[wire\\:id]').getAttribute('wire:id')
                    )

                    component.call('reorder',reorder);

                })

            });

        }

        reorderList('#mainReorderList');


        Livewire.on('submenuReady',function(){
            reorderList('#subReorderList');
        })

    </script>
@endpush
