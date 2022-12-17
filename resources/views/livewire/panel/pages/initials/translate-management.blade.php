<div>
    <div class="page-header">


        <x-breadcrumb :title="\Illuminate\Support\Facades\Lang::get('panel/global.translate.breadcrumbs.title')"
                      :items="
                      [
                      \Illuminate\Support\Facades\Lang::get('panel/global.translate.breadcrumbs.subtitle1'),
                      \Illuminate\Support\Facades\Lang::get('panel/global.translate.breadcrumbs.subtitle2')
                      ]
                        "/>
    </div>





    <livewire:panel.components.initials.translate-content/>
</div>

