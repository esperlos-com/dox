<div class="card">


    <div class="form-group">
        <input wire:key="translate.document" wire:model.debounce500="search" class="form-control" type="text" placeholder="@lang('panel/global.search')">
    </div>


    <table class="table table-bordered table-striped table-responsive-stack">
        <thead wire:ignore class="thead-dark">
        <tr>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.main_text')</th>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.translated_text')</th>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.actions')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($menus as $mainItem)
            <tr>


                <td style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.main_text'):</span>
                    {{$mainItem->title}}
                </td>

                <td style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.translated_text'):</span>
                    {{$mainItem->menu_tl?->title}}
                </td>


                <td style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.actions'):</span>
                    <a data-toggle="modal" data-target="#add"
                       wire:click.prevent="selectedItem('{{$mainItem->id}}')"
                       class="btn btn-success text-white">
                        <i class="ti-pencil"></i>
                    </a>


                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
{{$menus->links()}}


<!--begin::Add -->
    <div wire:ignore.self class="modal fade " id="add" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('panel/global.translate.content.dialog_add')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>

                <div class="modal-body">


                    <div class="row">

                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="translate_text">@lang('panel/global.translate.form.translate_text')</label>
                                <input wire:model.defer="menuTl.title" type="text" class="form-control"
                                       id="translate_text" placeholder="@lang('panel/global.translate.form.translate_text')">


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


</div>



