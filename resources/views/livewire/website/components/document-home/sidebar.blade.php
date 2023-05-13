<aside>
    <div id="accordion">
        <div class="panel list-group">

            @foreach($menus as $index=>$item)


                <ul>
                    <li>
                        <a href="#{{$item->slug}}" data-parent="#accordion" data-toggle="collapse"
                           class=" d-flex justify-content-between list-group-item @if($parent->slug != $item->slug) collapsed @endif  pb-2 pt-0">
                            {{$item->menu_tl->title??$item->title}}
                        </a>



                        <div class="collapse @if($parent->slug == $item->slug) show @endif" id="{{$item->slug}}">
                            <ul class="list-group-item-text">
                                @foreach($item->submenus as $submenu)
                                    <li >
                                        <a class="@if($menu->slug == $submenu->slug) link-selected-color @endif"
                                            href="{{ request()->getSchemeAndHttpHost().\App\Http\Helpers\Strings::DOCUMENT_URL_PREFIX.$submenu->slug}}">{{$submenu->menu_tl->title??$submenu->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </li>
                </ul>

            @endforeach

        </div>
    </div>
</aside>
