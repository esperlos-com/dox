<div>

    <nav class="navbar">
        <div class="container-fluid">

            <div class="header-body">
                <ul class="navbar-nav">
                    <li class="nav-item d-lg-none d-sm-block">
                        <a href="#" class="nav-link side-menu-open">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown">
                            <figure class="avatar avatar-sm avatar-state-success">
                                <img class="rounded-circle" src="assets/media/image/avatar.jpg" alt="...">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item">پروفایل</a>
                            <a href="#" data-sidebar-target="#settings" class="sidebar-open dropdown-item">تنظیمات</a>
                            <div class="dropdown-divider"></div>
                            <a wire:click="logout" href="#" class="text-danger dropdown-item">خروج</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">


                    <li class="nav-item">
                        <a href="#" class="d-lg-none d-sm-block nav-link search-panel-open">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <select wire:model="selectedVersion" class="custom-select" name="" id="">
                            @foreach($versions as $version)
                                <option value="{{$version->id}}">{{$version->title}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="nav-item">
                        <select wire:model="selectedLanguage" class="custom-select" name="" id="">
                            @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->title}}</option>
                            @endforeach
                        </select>
                    </li>


                </ul>
            </div>
            <div class="header-logo">
                <a href="#">
{{--                    <img src="{{asset('assets/media/image/logo.png')}}" alt="...">--}}
                    <span class="logo-text d-none d-lg-block">فلاتر پنل</span>
                </a>
            </div>



        </div>
    </nav>

</div>
