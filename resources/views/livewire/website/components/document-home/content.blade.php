<div class="row {{\App\Http\Helpers\DocumentHelper::getLanguage() == 'fa'?'rtl':'ltr'}}">

    <aside id="aside" class="colb-xxl-3 colb-xl-3 colb-lg-3 colb-md-3 colb-sm-3 " >
        <ul>
            @foreach($menus as $item)

                @if(\App\Http\Helpers\DocumentHelper::menuHasChild($item->id))

                    <li >{{$item->menu_tl->title??$item->title}}</li>

                @endif

                @foreach($submenus as $submenuItem)

                    @if($submenuItem->pid == $item->id)
                        <li value="{{ $submenuItem->id }}">
                            <a href="{{ request()->getSchemeAndHttpHost().\App\Http\Helpers\Strings::DOCUMENT_URL_PREFIX.$submenuItem->slug}}">
                                &nbsp;&nbsp;&nbsp;{{$submenuItem->menu_tl->title??$submenuItem->title }}
                            </a>

                        </li>
                    @endif


                @endforeach




            @endforeach
        </ul>
    </aside>

    <div id="content" class="colb-xxl-9 colb-xl-9 colb-lg-9 colb-md-9 colb-sm-9 " style="background: white">
        <div class="box-padding">
            {!! $document->document_tl->content??$document?->content !!}
        </div>
    </div>


</div>
