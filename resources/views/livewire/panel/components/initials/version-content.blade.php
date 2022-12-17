<div class="card">


    <div class="card-body">

        <div style="display:flex; justify-content:space-between;align-items:start">
            <h5 class="card-title">@lang('panel/global.version.content.title')</h5>
            <a data-toggle="modal" data-target="#add" wire:click="selectedItem(null)"
               class="btn btn-success text-white ">
                <i class="ti-plus"></i>
            </a>
        </div>

        <div class="form-group">
            <input wire:model.debounce500="search" class="form-control" type="text" placeholder="@lang('panel/global.search')">
        </div>


        <table class="table table-bordered table-striped table-responsive-stack">
            <thead wire:ignore class="thead-dark">
            <tr>

                <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.id')</th>
                <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.title')</th>
                <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.created_at')</th>
                <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.actions')</th>
            </tr>
            </thead>
            <tbody>

            @foreach($versions as $mainItem)
                <tr>


                    <td style="flex-basis: 33.3333%;">
                        <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.id'):</span>
                        {{$mainItem->id}}
                    </td>

                    <td style="flex-basis: 33.3333%;">
                        <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.title'):</span>
                        {{$mainItem->title}}
                    </td>


                    <td style="flex-basis: 33.3333%;">
                        <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.created_at'):</span>
                        {{\App\Http\Helpers\DateTimeHelper::greToJalali($mainItem->created_at,'/',true)}}
                    </td>


                    <td style="flex-basis: 33.3333%;">
                        <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.actions'):</span>
                        <a data-toggle="modal" data-target="#add"
                           wire:click.prevent="selectedItem({{$mainItem->id}})"
                           class="btn btn-success text-white">
                            <i class="ti-pencil"></i>
                        </a>

                        <a data-toggle="modal" data-target="#deleteModal"
                           wire:click.prevent="selectedItem({{$mainItem->id}})"
                           class="btn btn-danger text-white">
                            <i class="ti-trash"></i>
                        </a>




                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
        {{$versions->links()}}

    </div>


    <!--begin::Add -->
    <div wire:ignore.self class="modal fade " id="add" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >@lang('panel/global.version.content.dialog_add')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>

                <div class="modal-body">




                    <div class="row">

                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="title">@lang('panel/global.version.form.title')</label>
                                <input wire:model.defer="version.title" type="text" class="form-control"
                                       id="title" placeholder="@lang('panel/global.version.form.title')">

                                @error('version.title')
                                <x-error-message>{{$message}}</x-error-message>@enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('panel/global.button.close')
                    </button>
                    <button type="button" class="btn btn-primary font-weight-bold"
                            wire:click="submit">@lang('panel/global.button.submit')
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



