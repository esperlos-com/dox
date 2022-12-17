<div class="row {{\App\Http\Helpers\DocumentHelper::getLanguage() == 'fa'?'rtl':'ltr'}}">

    <aside id="aside" class="colb-xxl-2 colb-xl-2 colb-lg-2 colb-md-4 colb-sm-2 " >
        <ul>
            @foreach($menus as $item)

                @if(\App\Http\Helpers\DocumentHelper::menuHasChild($item->id))

                    <li >{{$item->menu_tl->title??$item->title}}</li>

                @endif

                @foreach($submenus as $submenuItem)

                    @if($submenuItem->pid == $item->id)
                        <li value="{{ $submenuItem->id }}">
                            <a href="{{ request()->getSchemeAndHttpHost().'/docs/'.$submenuItem->slug}}">
                                &nbsp;&nbsp;&nbsp;{{$submenuItem->menu_tl->title??$submenuItem->title }}
                            </a>

                        </li>
                    @endif


                @endforeach




            @endforeach
        </ul>
    </aside>

    <div id="content" class="colb-xxl-10 colb-xl-10 colb-lg-10 colb-md-10 colb-sm-10 " style="background: white">
        <div class="box-padding">
            {!! $document->document_tl->content??$document?->content !!}
        </div>
    </div>


</div>
