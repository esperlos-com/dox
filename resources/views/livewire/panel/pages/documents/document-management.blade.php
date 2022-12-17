<div>
    <div class="page-header">

        <x-breadcrumb title="اسناد" :items="['اسناد','مدیریت اسناد']"/>
    </div>

    @if(request()->id)

        <livewire:panel.components.documents.document.document-form/>
    @else

        <livewire:panel.components.documents.document.document-content/>

    @endif

</div>
