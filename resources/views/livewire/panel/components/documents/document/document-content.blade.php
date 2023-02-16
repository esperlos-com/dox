<div>
    <div class="card">


        <div class="card-body">

            <div style="display:flex; justify-content:space-between;align-items:start">
                <h5 class="card-title">@lang('panel/global.document.content.title')</h5>
                <a href="{{$urlWithoutParam.'-1'}}"
                   class="btn btn-success text-white ">
                    <i class="ti-plus"></i>
                </a>
            </div>


            <table class="table table-bordered table-striped table-responsive-stack">
                <thead wire:ignore class="thead-dark">
                <tr>
                    <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.id')</th>
                    <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.menu')</th>
                    <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.content')</th>
                    <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.created_at')</th>
                    <th style="flex-basis: 33.3333%;">@lang('panel/global.table_header.actions')</th>
                </tr>
                </thead>
                <tbody>

                @foreach($documents as $mainItem)
                    <tr>

                        <td style="flex-basis: 33.3333%;">
                            <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.id'):</span>
                            {{$mainItem->id}}
                        </td>

                        <td style="flex-basis: 33.3333%;">
                            <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.menu'):</span>
                            {{$mainItem->menu->title}}
                        </td>

                        <td class="table-long-length-text" style="flex-basis: 33.3333%;">
                            <span  class="table-responsive-stack-thead " style="display: none; ">@lang('panel/global.table_header.content'):</span>
                            {!! strip_tags($mainItem->content) !!}
                        </td>


                        <td style="flex-basis: 33.3333%;">
                            <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.created_at'):</span>
                            @if(app()->getLocale() == 'fa')
                                {{\App\Http\Helpers\DateTimeHelper::greToJalali($mainItem->created_at,'/',true)}}
                            @else
                                {{$mainItem->created_at}}
                            @endif
                        </td>


                        <td style="flex-basis: 33.3333%;">
                            <span class="table-responsive-stack-thead" style="display: none;">@lang('panel/global.table_header.actions'):</span>

                            <a href="{{$urlWithoutParam.$mainItem->id}}"
                               class="btn btn-success text-white mx-1">
                                <i class="ti-pencil"></i>
                            </a>

                            <a data-toggle="modal" data-target="#deleteModal"
                               wire:click.prevent="selectedItem({{$mainItem->id}})"
                               class="btn btn-danger text-white mx-1">
                                <i class="ti-trash"></i>
                            </a>


                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{$documents->links()}}

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
                        <button type="button" class="btn btn-primary" data-dismiss="modal">@lang('panel/global.button.no')
                        </button>
                        <button data-dismiss="modal" type="button" class="btn btn-danger"
                                wire:click="delete">@lang('panel/global.button.yes')
                        </button>
                    </div>
                </div>
            </div>


        </div>
        <!--end::Delete Modal-->


    </div>


</div>
