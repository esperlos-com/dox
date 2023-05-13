<header id="header">

    <div class="nav justify-content-between align-items-center px-4 py-4">
        <ul class="main align-items-center">
            <li><a href="https://flutterap.com">@lang('website/global.nav.home')</a></li>
            <li><a href="https://codecanyon.net/item/flutterap-flutter-admin-panel/44729716/support">@lang('website/global.nav.faq')</a></li>
            <li><a href="https://flutterap.com/roadmap">@lang('website/global.nav.roadmap')</a></li>
            <li><a href="https://flutterap.com/features">@lang('website/global.nav.features')</a></li>
            <ul class="social">
                <li><a href="https://github.com/flutterap59/flutterap"><i class="fa-brands  fa-github"></i></a></li>
                <li><a href="https://www.youtube.com/@flutterap"><i class="fa-brands  fa-youtube"></i></a></li>
            </ul>
            <ul class="search">
                <li wire:ignore>
                    <select class="form-select" id="inputSearch" data-placeholder="Choose one thing">
                        <option>@lang('website/global.search')</option>

                    </select>
                </li>
            </ul>
        </ul>


        <ul class="shop">
            <li><a href="https://codecanyon.net/item/flutterap-flutter-admin-panel/44729716">@lang('website/global.buttons.buy')</a></li>
        </ul>
    </div>

    <div class="manage align-items-center w-100 px-4 py-1">
        <i class="menu fa-solid fa-bars"></i>
        <div class="logo-container d-flex h-100 align-items-center">

            <img class="logo" src="{{ asset('assets/media/image/logo.ico')}}" style="aspect-ratio: 1">
            <h3 class="title text-white mx-3">{{\App\Http\Helpers\Strings::appName()}}</h3>

        </div>
        <form>
            @csrf
            <div class="justify-content-end d-flex align-items-center" style="gap:1.5rem">
                <div class="form-group m-0 p-0">
                    <select wire:model="selectedVersion" id="inputState" class="form-control">
                        @foreach($versions as $version)
                            <option value="{{$version->id}}">{{$version->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group m-0  p-0">

                    <select wire:model="selectedLanguage" id="inputState" class="form-control">
                        @foreach($languages as $language)
                            <option value="{{$language->id}}">{{$language->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>

</header>


@push('custom-scripts')

    <script>



        $("#inputSearch").select2({
            theme: "bootstrap-5",
            width: '300px',
        });


        let $select = $('#inputSearch');
        let $search = $select.data('select2').$dropdown.find('.select2-search__field');


        $('#inputSearch').on('select2:select', function (e) {
            let url = e.params.data.id;
            window.location.href = url;
        });


        Livewire.on('getSearchData', function (data) {

            let selectSearch = document.querySelector('#inputSearch');

            selectSearch.innerHTML = '';

            data.forEach(function (item) {
                let option = document.createElement('option');

                option.value = changeLastPartOfUrl(item['slug']);
                option.innerText = item['title'];

                selectSearch.appendChild(option)
            })

        })

        $search.on('input', function (event) {
            Livewire.emit('search', event.target.value)
        });


        function changeLastPartOfUrl(lastPartUrl) {
            let url = window.location.href;
            let parts = url.split('/');
            parts[parts.length - 1] = lastPartUrl;
            let newUrl = parts.join('/');

            return  newUrl;
        }

    </script>

@endpush
