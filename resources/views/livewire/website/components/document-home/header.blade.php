<header id="header">
    <nav class="d-flex main-container-padding justify-content-space-between align-items-center">

       <form>
           @csrf
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
       </form>

        <div>
            <h1 class="logo">{{\App\Http\Helpers\Strings::appName()}}</h1>
        </div>

    </nav>
</header>
