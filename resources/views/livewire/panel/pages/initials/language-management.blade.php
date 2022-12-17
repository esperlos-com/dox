<div>
    <div class="page-header">

        <x-breadcrumb :title="\Illuminate\Support\Facades\Lang::get('panel/global.language.breadcrumbs.title')"
                      :items="
                      [
                      \Illuminate\Support\Facades\Lang::get('panel/global.language.breadcrumbs.subtitle1'),
                      \Illuminate\Support\Facades\Lang::get('panel/global.language.breadcrumbs.subtitle2')
                      ]
                        "/>
    </div>

    <livewire:panel.components.initials.language-content/>
</div>

