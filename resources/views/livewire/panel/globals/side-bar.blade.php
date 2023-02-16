<div>


    <div class="side-menu">

        <div class="side-menu-body">
            <ul>
                <li class="side-menu-divider">@lang('panel/global.sidebar.head')</li>
                @foreach($menuItems as $menuItem)

                    @if(empty($menuItem['submenuItems']))
                        <li><a class="{{ (request()->is($menuItem['route'])) ? 'active' : '' }}"
                               href="{{route($menuItem['route'])}}"><i class="icon ti-home"></i>
                                <span>@lang($menuItem['title'])</span> </a></li>
                    @else
                        <li><a href="#"><i class="icon ti-rocket"></i> <span>@lang($menuItem['title'])</span> </a>

                            @php
                                $hasActive = false;
                            @endphp
                            @foreach($menuItem['submenuItems'] as $submenuItem)
                                @if((request()->is($submenuItem['route'])))
                                    @php
                                        $hasActive = true;
                                    @endphp
                                    @break
                                @endif
                            @endforeach
                            <ul style="{{$hasActive?'display:block':''}}">

                                @foreach($menuItem['submenuItems'] as $submenuItem)
                                    <li>
                                        <a class="{{ (request()->is($submenuItem['route'])) ? 'active' : '' }}"
                                           href="{{route($submenuItem['route'])}}">@lang($submenuItem['title'])</a>
                                    </li>
                                @endforeach


                            </ul>
                        </li>
                    @endif


                @endforeach


            </ul>
        </div>
    </div>

</div>

