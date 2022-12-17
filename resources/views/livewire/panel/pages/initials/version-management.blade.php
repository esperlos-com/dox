<div>
    <div class="page-header">
        <x-breadcrumb :title="\Illuminate\Support\Facades\Lang::get('panel/global.version.breadcrumbs.title')"
                      :items="
                      [
                      \Illuminate\Support\Facades\Lang::get('panel/global.version.breadcrumbs.subtitle1'),
                      \Illuminate\Support\Facades\Lang::get('panel/global.version.breadcrumbs.subtitle2')
                      ]
                        "/>

    </div>

    <livewire:panel.components.initials.version-content/>
</div>

