<header id="header">
    <nav class="d-flex main-container-padding justify-content-space-between align-items-center">

       <div>
           <select wire:model="selectedVersion"  class="text-white">
               @foreach($versions as $version)
                   <option value="{{$version->id}}">{{$version->title}}</option>
               @endforeach
           </select>

           <select wire:model="selectedLanguage" class="text-white">
               @foreach($languages as $language)
                   <option value="{{$language->id}}">{{$language->title}}</option>
               @endforeach
           </select>
       </div>

        <div>
            <h1 class="logo">DOX</h1>
        </div>

    </nav>
</header>
