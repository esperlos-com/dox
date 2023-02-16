<div>
    <div class="page-header">


        <x-breadcrumb title="panel/global.document.content.title"
                      :items="['panel/global.document.breadcrumbs.subtitle2','panel/global.document.breadcrumbs.subtitle1']"/>
    </div>

    @if(request()->id)

        <livewire:panel.components.documents.document.document-form/>
    @else

        <livewire:panel.components.documents.document.document-content/>

    @endif

</div>
