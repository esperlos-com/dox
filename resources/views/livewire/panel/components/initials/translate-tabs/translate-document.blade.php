<div>


    <div class="form-group">
        <input wire:key="translate.document" wire:model.debounce500="search" class="form-control" type="text" placeholder="@lang('panel/global.search')">
    </div>


    <table class="table table-bordered table-striped table-responsive-stack">
        <thead wire:ignore class="thead-dark">
        <tr>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.menu')</th>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.main_text')</th>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.translated_text')</th>
            <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.actions')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($documents as $mainItem)
            <tr>


                <td class="table-long-length-text" style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.menu'):</span>
                    {!! strip_tags($mainItem->menu->title) !!}
                </td>

                <td class="table-long-length-text" style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.main_text'):</span>
                    {!! strip_tags($mainItem->content) !!}
                </td>

                <td class="table-long-length-text" style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead " style="display: none;">@lang('panel/global.table_header.translated_text'):</span>
                    {!! strip_tags($mainItem->document_tl?->content) !!}
                </td>


                <td style="flex-basis: 33.3333%;">
                    <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.actions'):</span>

                    <a data-toggle="modal"
                       href="{{url('document-management/'.$mainItem->id.'/translate')}}"
                       class="btn btn-success text-white">
                        <i class="ti-pencil"></i>
                    </a>


                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
{{$documents->links()}}



</div>



