<div class="card">

    <div class="card-body">



        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" wire:key="tab-1">
                <a wire:ingore class="nav-link show @if($selectedTab == 1) active @endif" id="menu-tab"
                   data-toggle="tab"
                   wire:click.prevent="changeTab(1)" href="#" role="tab" aria-controls="menu" aria-selected="false">
                    @lang('panel/global.translate.tabs.menu')
                    </a>
            </li>
            <li class="nav-item" wire:key="tab-2">
                <a wire:ingore class="nav-link show @if($selectedTab == 2) active @endif" id="document-tab"
                   data-toggle="tab"
                   wire:click.prevent="changeTab(2)" href="#" role="tab" aria-controls="document" aria-selected="false">
                    @lang('panel/global.translate.tabs.document')
                </a>
            </li>



        </ul>
        <div class="tab-content" id="myTabContent">
            <div wire:ingore wire:key="tab-content-1"
                 class="tab-pane fade p-t-20 @if($selectedTab == 1) show active @endif"
                 id="menu" role="tabpanel" aria-labelledby="menu-tab">
                <livewire:panel.components.initials.translate-tabs.translate-menu/>
            </div>

            <div wire:ingore wire:key="tab-content-2"
                 class="tab-pane fade p-t-20 @if($selectedTab == 2) show active @endif"
                 id="document" role="tabpanel" aria-labelledby="document-tab">
                <livewire:panel.components.initials.translate-tabs.translate-document/>
            </div>



        </div>


    </div>

</div>


